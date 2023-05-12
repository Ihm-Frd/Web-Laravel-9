<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use DB; (klo eror kembaliin aja) apus DB
// use Uuid; (klo eror kembaliin aja) apus UID
use Carbon\Carbon;
use App\Models\FormInput;
use App\Models\FileUpload;
use App\Models\question;
use App\Models\answer;
use App\Models\AnswerSave;
use Brian2694\Toastr\Facades\Toastr;
use PhpParser\Node\Stmt\Return_;
use Illuminate\Support\Facades\DB; //apus yg DB ini 
use Illuminate\Support\Facades\Storage;
use Webpatser\Uuid\Uuid; //apus yg UUID ini 




class FormController extends Controller
{
    /** form index */
    public function formIndex()
    {
        return view('form.forminput');
    }

    /** save record */
    public function formSaveRecord(Request $request)
    {
        $request->validate([
            'full_name'   => 'required|string|max:255',
            'gender'      => 'required|string|max:255',
            'address'     => 'required|string|max:255',
            'state'       => 'required|string|max:255',
            'city'        => 'required|string|max:255',
            'pekerjaan'   => 'required|string|max:255',
            'no_ktp'      => 'required|string|max:255',
            'blood_group' => 'required|not_in:0',
        ]);

        DB::beginTransaction();
        try {

            $saveRecord              = new FormInput;
            $saveRecord->full_name   = $request->full_name;
            $saveRecord->gender      = $request->gender;
            $saveRecord->address     = $request->address;
            $saveRecord->state       = $request->state;
            $saveRecord->city        = $request->city;
            $saveRecord->pekerjaan   = $request->pekerjaan;
            $saveRecord->no_ktp      = $request->no_ktp;
            $saveRecord->blood_group = $request->blood_group;
            $saveRecord->save();
            DB::commit();
            Toastr::success('Data Sukses Disimpan <i class="bi bi-hand-thumbs-up-fill"></i>','Success');
            return back();
            // return redirect()->back();
        } catch(\Exception $e) {
            DB::rollback();
            Toastr::error('Data Gagal Disimpan <i class="bi bi-hand-thumbs-down-fill"></i>','Error');
            return back();
            // return redirect()->back();
        }
    }

    /** page form view */
    
    public function formView(Request $request)
    {
        if($request->has('search')){
            $dataFormInput = FormInput::where('full_name','LIKE','%' .$request->search.'%')->get();
        }else{
         $dataFormInput = FormInput::all();
        }
        return view('pageview.form-input-table',compact('dataFormInput' ));


    }


    // public function formView()
    // {
    //     $dataFormInput = FormInput::all();
    //     return view('pageview.form-input-table',compact('dataFormInput'));
    // }

    
    
    /** page edit form input */
    public function formInputEdit($id)
    {
        $formInputView = FormInput::where('id',$id)->first();
        return view('pageview.form-input-edit',compact('formInputView'));
    }

    /** update record form input */
    public function formUpdateRecord(Request $request)
    {
        $request->validate([
            'full_name'   => 'required|string|max:255',
            'gender'      => 'required|string|max:255',
            'address'     => 'required|string|max:255',
            'state'       => 'required|string|max:255',
            'city'        => 'required|string|max:255',
            'pekerjaan'   => 'required|string|max:255',
            'no_ktp'      => 'required|string|max:255',
            'blood_group' => 'required|not_in:0',
        ]);

        DB::beginTransaction();
        try {

            $updateRecord = [
                'full_name'   => $request->full_name,
                'gender'      => $request->gender,
                'address'     => $request->address,
                'state'       => $request->state,
                'city'        => $request->city,
                'pekerjaan'   => $request->pekerjaan,
                'no_ktp'      => $request->no_ktp,
                'blood_group' => $request->blood_group,
            ];
            
            FormInput::where('id',$request->id)->update($updateRecord);

            DB::commit();
            Toastr::success('Data Sukses Disimpan <i class="bi bi-hand-thumbs-up-fill"></i>','Success');
            return back();
            // return redirect()->back();
        } catch(\Exception $e) {
            DB::rollback();
            Toastr::error('Data Gagal Disimpan <i class="bi bi-hand-thumbs-down-fill"></i>','Error');
            return back();
            // return redirect()->back();
        }
        return view('pageview.form-input-table');
    }

    /** delete record */
    public function formDelete(Request $request)
    {
        try {
            FormInput::destroy($request->id);
            Toastr::success('Data Sukses Disimpan <i class="bi bi-hand-thumbs-up-fill"></i>','Success');
            return redirect()->back();
        } catch(\Exception $e) {
            DB::rollback();
            Toastr::error('Data Gagal Disimpan <i class="bi bi-hand-thumbs-down-fill"></i>','Error');
            return redirect()->back();
        }
    }

    /** form upload file index */
    public function formUpdateIndex()
    {
        return view('form.form-upload-file');
    }

    /** update file */
    public function formFileUpdate(Request $request) 
    {
        $request->validate([
            'upload_by' => 'required|string|max:255',
            'file_name' => 'required',
        ]);

        DB::beginTransaction();
        try {

            $dt = Carbon::now();
            $date_time = $dt->toDayDateTimeString();
            $folder_name = "file_store";
            Storage::disk('local')->makeDirectory($folder_name, 0775, true); // create directory
            if($request->hasFile('file_name'))
            {
                foreach($request->file_name as $photos) {
                    $file_name = $photos->getClientOriginalName(); // get file original name
                    $saveRecord = new FileUpload;
                    $saveRecord->upload_by = $request->upload_by;
                    $saveRecord->date_time = $date_time;
                    $saveRecord->file_name = $file_name;
                    $saveRecord->uuid = Uuid::generate(5,$date_time . $file_name .$folder_name, Uuid::NS_DNS);
                    Storage::disk('local')->put($folder_name.'/'.$file_name,file_get_contents($photos->getRealPath()));
                    $saveRecord->save();
                }
                DB::commit();
                Toastr::success('Data Sukses Disimpan <i class="bi bi-hand-thumbs-up-fill"></i>','Success');
                return redirect()->back();
            }

            //klo eror 'storage' ganti '/storage' + apus (use Illuminate\Support\Facades\Storage;)


        } catch(\Exception $e) {
            DB::rollback();
            Toastr::error('Data Gagal Disimpan <i class="bi bi-hand-thumbs-down-fill"></i>','Error');
            return redirect()->back();
        }
    }



//             Berikut ini adalah penjelasan dari setiap baris kode diatas:

// $dt = Carbon::now();
// Membuat objek Carbon yang merepresentasikan waktu saat ini.

// $date_time = $dt->toDayDateTimeString();
// Mengubah format waktu dari objek Carbon menjadi string dengan format "Day, Month Date, Year H:i:s A".

// $folder_name = "file_store";
// Mendefinisikan nama folder untuk menyimpan file yang diupload.

// \Storage::disk('local')->makeDirectory($folder_name, 0775, true);
// Membuat direktori di dalam penyimpanan lokal dengan nama folder yang telah ditentukan sebelumnya, menggunakan permission 0775, dan parameter terakhir true menandakan bahwa direktori akan dibuat secara rekursif jika direktori di atasnya belum ada.

// if($request->hasFile('file_name'))
// Mengecek apakah ada file yang diupload dengan nama "file_name" pada request.

// foreach($request->file_name as $photos) {
// Melakukan loop untuk setiap file yang diupload.

// $file_name = $photos->getClientOriginalName();
// Mendapatkan nama asli file yang diupload.

// $saveRecord = new FileUpload;
// Membuat objek dari model "FileUpload" untuk disimpan ke dalam database.

// $saveRecord->upload_by = $request->upload_by;
// Mengisi kolom "upload_by" pada model "FileUpload" dengan nilai yang diambil dari request.

// $saveRecord->date_time = $date_time;
// Mengisi kolom "date_time" pada model "FileUpload" dengan nilai waktu yang telah diubah formatnya menjadi string.

// $saveRecord->file_name = $file_name;
// Mengisi kolom "file_name" pada model "FileUpload" dengan nilai nama asli file yang diupload.

// $saveRecord->uuid = Uuid::generate(5,$date_time . $file_name .$folder_name, Uuid::NS_DNS);
// Mengisi kolom "uuid" pada model "FileUpload" dengan UUID yang dibuat menggunakan nilai waktu, nama file, dan nama folder sebagai input untuk generate UUID.

// \Storage::disk('local')->put($folder_name.'/'.$file_name,file_get_contents($photos->getRealPath()));
// Menyimpan file yang diupload ke dalam direktori yang telah dibuat sebelumnya.

// $saveRecord->save();
// Menyimpan objek model "FileUpload" ke dalam database.

// DB::commit();
// Melakukan commit pada transaksi database.

// Toastr::success('Data Sukses Disimpan <i class="bi bi-hand-thumbs-up-fill"></i>','Success');
// Menampilkan pesan sukses menggunakan package Toastr.

// return redirect()->back();
// Melakukan redirect kembali ke halaman sebelumnya setelah berhasil menyimpan file.



     /** view file upload */
     public function formFileView(Request $request)
     {
         if($request->has('search')){
             $fileUpload = fileUpload::where('upload_by','LIKE','%' .$request->search.'%')->get();
         }else{
          $fileUpload = fileUpload::all();
         }
         return view('pageview.view-file-upload-table',compact('fileUpload' ));
 
 
     }


    /** file upload */
    public function fileDownload($file_name)
    {
        $fileDownload = FileUpload::where('file_name',$file_name)->first();
        $download     = storage_path("app/file_store/{$fileDownload->file_name}");
        return response()->download($download);

    }

    /** delete record and remove file in folder */
    public function fileDelete(Request $request)
    {
        try {
            FileUpload::destroy($request->id);
            unlink(storage_path("app/file_store/".$request->file_name));
            Toastr::success('Data Sukses Disimpan <i class="bi bi-hand-thumbs-up-fill"></i>','Success');
            return redirect()->back();
        } catch(\Exception $e) {
            DB::rollback();
            Toastr::error('Data Gagal Disimpan <i class="bi bi-hand-thumbs-down-fill"></i>','Error');
            return redirect()->back();
        }
    }


    /** save record */
    public function radioSave(Request $request)
    {
        DB::beginTransaction();
        try {
            if ($request->question_id1 == 1) {
                $count = 1;
                foreach ($request->input('answer_name'.$count) as $key => $answer) {
                    $saveRecord = [
                        'answer_name'=> $request->input('answer_name'.$count)[$key],
                        'question_id'=> $request->input('question_id'.$count)[$key],
                    ];
                }
                DB::table('answer_saves')->insert($saveRecord);
            }
            if ($request->question_id2 == 2) {
                $count = 2;
                foreach ($request->input('answer_name'.$count) as $key => $answer) {
                    $saveRecord = [
                        'answer_name'=> $request->input('answer_name'.$count)[$key],
                        'question_id'=> $request->input('question_id'.$count)[$key],
                    ];
                }
                DB::table('answer_saves')->insert($saveRecord);
            }
            if ($request->question_id3 == 3) {
                $count = 3;
                foreach ($request->input('answer_name'.$count) as $key => $answer) {
                    $saveRecord = [
                        'answer_name'=> $request->input('answer_name'.$count)[$key],
                        'question_id'=> $request->input('question_id'.$count)[$key],
                    ];
                }
                DB::table('answer_saves')->insert($saveRecord);
            }

            DB::commit();
            Toastr::success('Pertanyaan Sukses Disimpan <i class="bi bi-hand-thumbs-up-fill"></i>','Success');
            return redirect()->back();
        } catch(\Exception $e) {
            DB::rollback();
            Toastr::error('Pertanyaan Gagal Disimpan <i class="bi bi-hand-thumbs-down-fill"></i>','Error');
            return redirect()->back();
        }
    }
}

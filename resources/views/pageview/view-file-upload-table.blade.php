
@extends('layouts.master')
@section('content')
    {{-- message --}}
    {!! Toastr::message() !!}
    <div class="page-wrapper">
        <div class="content container-fluid">
            <div class="page-header">
                <div class="row">
                    <div class="col-sm-12">
                        <h3 class="page-title">Form Laporan File Upload</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item active">Form Laporan File Upload</li>
                        </ul>
                    </div>
                </div>
            </div>

        
            {{-- Form Search  --}}

        <div class="row g-5 align-items-center">
            <div class="col-12 col-md-6 mb-2">
                <form action="{{ route('view/upload/file') }}" id="form" method="get">
                    <div class="input-group">
                        <input type="search" id="inputPassword6" name="search" class="form-control" aria-label="Cari" placeholder="Telusuri...">
                        <button class="btn btn-outline-warning" type="submit"><i class="bi bi-search"></i></button>
                    </div>
                </form>
            </div>

            
        
            <style>
                input[type="search"] {
                border-radius: 30px;
                padding: 10px;
                border: 1px solid #f6c23e;
                transition: border-color 0.3s ease-in-out, background-color 0.3s ease-in-out;
                }

                input[type="search"]:hover,
                input[type="search"]:focus,input{
                    border-color: #f6c23e;
                    background-color: #f6c23e;
                }
            </style>
            <script>
                // saat halaman dimuat, periksa apakah ada nilai search pada URL
                let urlParams = new URLSearchParams(window.location.search);
                let searchInput = document.getElementById('inputPassword6');
                if(urlParams.has('search')){
                  // jika ada, set nilai input dengan nilai search
                  searchInput.value = urlParams.get('search');
                }
              
                // saat nilai input berubah, cek apakah nilainya kosong
                searchInput.addEventListener('input', function(){
                  if(searchInput.value.trim() === ''){
                    // jika nilai kosong, hapus parameter search dari URL dan reload halaman
                    urlParams.delete('search');
                    window.location.href = window.location.origin + window.location.pathname;
                  }
                });
              
                // saat form disubmit, cek apakah nilai input kosong
                document.querySelector('form').addEventListener('submit', function(e){
                  if(searchInput.value.trim() === ''){
                    // jika nilai kosong, hapus parameter search dari URL dan reload halaman
                    urlParams.delete('search');
                    window.location.href = window.location.origin + window.location.pathname;
                    e.preventDefault();
                  }
                });
              </script>


                <a href="{{ route('form/update/page') }}"  class="btn btn-primary btn-center m-auto btn-lg">Tambahkan Manual <i class="bi bi-plus-square"></i></a>
            </div>
        
                        
            

        {{-- Form Search end --}}

            <div class="row">
                <div class="col-md-12">
                    <div class="table-responsive">
                        <table class="table table-striped custom-table mb-0 datatable">
                            <thead>
                                <tr>
                                    <th hidden>Nomor</th>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Waktu Upload</th>
                                    <th>Download File<i class="bi bi-download"></i></th>
                                    <th>Uuid</th>
                                    <th>Lihat File</th>
                                    <th class="text-right">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($fileUpload as $key=>$items )
                                <tr>
                                    <td hidden class="id">{{ $items->id }}</td>
                                    <td>{{ ++ $key }}</td>
                                    <td>
                                        <strong>{{ $items->upload_by }}</strong>
                                    </td>
                                    {{-- <td>{{ $items->date_time }}</td> --}}
                                    <td>{{ date('d F Y',strtotime($items->date_time)) }}</td>
                                    <td><a href="{{ url('download/file/'.$items->file_name) }}" class="file_name">{{ $items->file_name }}</a></td>
                                    <td>{{ $items->uuid }}</td>
                                    <td>
                                        <span class="avatar">
                                            <img alt="" src="{{ url('download/file/'.$items->file_name) }}">
                                        </span>
                                        
                                          
                                    </td>
                                    <td class="text-center">
                                        <a class="dropdown-item delete" href="#" data-toggle="modal" data-target="#delete_record">
                                            <i class="fa fa-trash-o m-r-5"></i>
                                        </a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

{{-- Desain hover klik gambar span avatar (LIHAT File) --}}
<style>

.avatar {
  position: relative;
}

.avatar img:hover {
  transform: scale(4);
  transition: all 0.3s ease-in-out;
  position: absolute;
  left: 50%;
  top: 50%;
  transform: translate(-50%, -50%);
  z-index: 9999;
  width: 600%;
}


    </style>
  

{{-- Desain hover klik gambar span avatar (LIHAT File)  END --}}

    <!-- Delete Record From Modal -->
    <div class="modal custom-modal fade" id="delete_record" role="dialog">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="form-header">
                        <h3>Hapus File Record</h3>
                        <p>Apakah Anda Yakin ?</p>
                    </div>
                    <div class="modal-btn delete-action">
                        <form action="{{ route('download/file/delete') }}" method="POST">
                            @csrf
                            <input type="hidden" name="id" class="e_id" value="">
                            <input type="hidden" name="file_name" class="e_file_name" value="">
                            <div class="row">
                                <div class="col-6">
                                    <button type="submit" class="btn btn-primary continue-btn submit-btn">Hapus</button>
                                </div>
                                <div class="col-6">
                                    <a href="javascript:void(0);" data-dismiss="modal" class="btn btn-primary cancel-btn">Batal</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Delete Record From Modal -->

@section('script')
{{-- delete js --}}
<script>
    $(document).on('click','.delete',function()
    {
        var _this = $(this).parents('tr');
        $('.e_id').val(_this.find('.id').text());
        $('.e_file_name').val(_this.find('.file_name').text());
    });

</script>
@endsection
@endsection

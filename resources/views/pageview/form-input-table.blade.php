
@extends('layouts.master')
@section('content')
    {{-- message --}}
    {!! Toastr::message() !!}
   <div class="page-wrapper">
    <div class="content container-fluid">
        <div class="page-header">
            <div class="row">
                <div class="col-sm-12">
                    <h3 class="page-title">Form Laporan</h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Data Penduduk</a></li>
                        <li class="breadcrumb-item active">List Warga Ciantra</li>
                    </ul>
                </div>
            </div>
        </div>

        {{-- Form Search  --}}

        <div class="row g-5 align-items-center m-auto">
            <div class="col-12 col-md-6 mb-2">
                <form action="{{ route('form/page/view') }}" id="form" method="get">
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
              
              
              <a href="{{ route('form/input/page') }}"  class="btn btn-primary btn-center m-auto btn-lg " >Tambahkan Manual  <i class="bi bi-plus-square"></i></a>
            </div>

        {{-- Form Search end --}}

        <div class="row">
            <div class="col-md-12">
                <div class="table-responsive">
                    <table class="table table-striped custom-table mb-0 datatable">
                        <thead>
                            <tr>
                                <th hidden>id</th>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Gender</th>
                                <th>Gol.Darah</th>
                                <th>Alamat</th>
                                <th>Negara</th>
                                <th>Asal</th>
                                <th>Pekerjaan</th>
                                <th>No.KTP</th>
                                <th class="text-right">Ubah</th>
                            </tr>
                        </thead>
                        <tbody>

                           
                            @foreach ($dataFormInput as $key=>$items )
                            <tr>
                                
                                <td hidden class="id">{{ $items->id }}</td>
                                <td>{{ ++ $key }}</td>
                                <td>
                                    <strong>{{ $items->full_name }}</strong>
                                </td>
                                <td>{{ $items->gender }}</td>
                                <td>{{ $items->blood_group }}</td>
                                <td>{{ $items->address }}</td>
                                <td>{{ $items->state }}</td>
                                <td>{{ $items->city }}</td>
                                <td>{{ $items->pekerjaan }}</td>
                                <td>{{ $items->no_ktp }}</td>
                                <td class="text-right">
                                    <div class="dropdown dropdown-action">
                                        <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                            <i class="material-icons">more_vert</i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="{{ url('form/input/edit/'.$items->id) }}">
                                                <i class="fa fa-pencil m-r-5"></i>Edit
                                            </a>
                                            <a class="dropdown-item delete" href="#" data-toggle="modal" data-target="#delete_form_record">
                                                <i class="fa fa-trash-o m-r-5"></i>Hapus
                                            </a>
                                        </div>
                                    </div>
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



    <!-- Delete Record From Modal -->
    <div class="modal custom-modal fade" id="delete_form_record" role="dialog">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="form-header">
                        <h3>Hapus Form Record</h3>
                        <p>Apakah Anda Yakin ?</p>
                    </div>
                    <div class="modal-btn delete-action">
                        <form action="{{ route('form/input/delete') }}" method="POST">
                            @csrf
                            <input type="hidden" name="id" class="e_id" value="">
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
    });
</script>
@endsection
@endsection

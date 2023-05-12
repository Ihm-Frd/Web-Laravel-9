@extends('layouts.master')
@section('content')
@section('style')

<style>
    .btn-tertiary {
        color: #555;
        padding: 0;
        line-height: 40px;
        width: 300px;
        margin: auto;
        display: block;
        border: 2px solid #555;
    }
    .btn-tertiary:hover, .btn-tertiary:focus {
        color: #888888;
        border-color: #888888;
    }

    /* input file style */
    .input-file {
        width: 0.1px;
        height: 0.1px;
        opacity: 0;
        overflow: hidden;
        position: absolute;
        z-index: -1;
    }
    .input-file + .js-labelFile {
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: nowrap;
        padding: 0 10px;
        cursor: pointer;
    }
    .input-file + .js-labelFile .icon:before {
        content: "";
    }
    .input-file + .js-labelFile.has-file .icon:before {
        content: "";
        color: #5AAC7B;
    }
</style>

@endsection
    {{-- message --}}
    {!! Toastr::message() !!}
    <div class="page-wrapper">
        <div class="content container-fluid">
            <div class="page-header">
                <div class="row">
                    <div class="col-sm-12">
                        
                        <h3 class="page-title">Form Upload</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('/') }}">Dashboard</a></li>
                            <li class="breadcrumb-item active">File Upload</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header" style="text-align: center;">
                            <h5 class="card-title mb-0">File Upload KTP</h5>
                        </div>
                        <br>
                        <form action="{{ route('form/upload/file') }}" id="file-upload-form" class="uploader" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <div class="col-xl-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control @error('upload_by') is-invalid @enderror" name="upload_by" placeholder="Isi Nama Anda (Sesuai KTP)" value="{{ old('upload_by') }}">
                                    </div>
                                </div> 
                                <input type="file" name="file_name[]" id="file" class="input-file @error('file_name[]') is-invalid @enderror" multiple>
                                <label for="file" class="btn btn-tertiary js-labelFile">
                                    <i class="icon fa fa-check"></i>
                                    <span class="js-fileName">Tambahkan Scan KTP</span>
                                </label>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-success btn-lg">Submit</button>
                                
                            </div>
                            <a href="{{ url()->previous() }}"  class="btn btn-primary btn-sm mr-2"><i class="bi bi-arrow-left-circle"></i> Kembali</a>
                            
                            <br>
                            <a href="{{ route('submitWA') }}" class="btn btn-success-wa">
                                <div class="col-sm" style="display: inline-block;">
                                        <span class="avatar"><img src="{{ URL::to('assets/img/callcenter.jpg') }}" class="call" alt="Image Button"></span>
                                        <span style="display: inline-block;"><i class="bi bi-whatsapp"></i> Hubungi kami </span>
                                        
                                    </div>
                                    </a>
                                <style>

                                <style>
                                    .avatar {
                                        margin-right: 10px;
                                        border-radius: 50%;
                                     display: inline-block;
                                    }

                                    .text-left  {
                                    display: inline-block;
                                }

                                .btn-success-wa
                                 {
                                    display: inline-block;
                                    position: absolute;
                                    margin-inline-end: 2rem;
                                    margin-right: 1rem;
                                    margin-top: 0.9rem;
                                    right: 0;
                                    background-color: rgba(47, 202, 0, 0.966);
                                    border-radius: 30px;
                                    
                                }
                                 

                                </style>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @section('script')
    <script>
        (function() {
            $('.input-file').each(function() {
                var $input = $(this),
                $label = $input.next('.js-labelFile'),
                labelVal = $label.html();
                $input.on('change', function(element) {
                    var fileName = '';
                    if (element.target.value) fileName = element.target.value.split('\\').pop();
                    fileName ? $label.addClass('has-file').find('.js-fileName').html(fileName) : $label.removeClass('has-file').html(labelVal);
                });
            });
        })();
    </script>
@endsection
@endsection

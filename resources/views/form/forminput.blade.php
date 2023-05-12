@extends('layouts.master')
@section('content')
    {{-- message --}}
    {!! Toastr::message() !!}
    <div class="page-wrapper">
        <div class="content container-fluid">
            <div class="page-header">
                <div class="row">
                    <div class="col">
                        <h3 class="page-title">Form Pengisian</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Data Penduduk</a></li>
                            <li class="breadcrumb-item active">Bio Data Penduduk</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <a href="{{ route('submitWA') }}" class="btn btn-success-wa">
                            <div class="col-sm" style="display: inline-block;">
                                    <span class="avatar"><img src="{{ URL::to('assets/img/callcenter.jpg') }}" class="call" alt="Image Button"></span>
                                    <span ><i class="bi bi-whatsapp"></i> Hubungi kami </span>
                                    
                                </div>
                                </a>
                        <div class="card-header">
                            <h4 class="card-title mb-0">Isi Tabel Dengan Benar </h4>
                        </div>

                        <div class="card-body">
                            <h4 class="card-title">Biodata Penduduk</h4>
                            <form action="{{ route('form/input/save') }}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-xl-6">
                                        <div class="form-group row">
                                            <label class="col-lg-3 col-form-label">Nama Lengkap</label>
                                            <div class="col-lg-9">
                                                <input type="text" class="form-control @error('full_name') is-invalid @enderror" name="full_name" value="{{ old('full_name') }}">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-3 col-form-label">Gender</label>
                                            <div class="col-lg-9">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input " type="radio" name="gender" id="gender_male" value="Male" checked>
                                                    <label class="form-check-label" for="gender_male">Pria</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="gender" id="gender_female" value="Female">
                                                    <label class="form-check-label" for="gender_female">Wanita</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-3 col-form-label">Gol.Darah</label>
                                            <div class="col-lg-9">
                                                <select class="select @error('blood_group') is-invalid @enderror" name="blood_group">
                                                    <option selected disabled>-- Pilih Gol.Darah Anda --</option>
                                                    <option value="A+" {{ old('blood_group') == 'A+' ? "selected" :""}}>A+</option>
                                                    <option value="O+" {{ old('blood_group') == 'O+' ? "selected" :""}}>O+</option>
                                                    <option value="B+" {{ old('blood_group') == 'B+' ? "selected" :""}}>B+</option>
                                                    <option value="AB+" {{ old('blood_group') == 'AB+' ? "selected" :""}}>AB+</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-3 col-form-label">Alamat</label>
                                            <div class="col-lg-9">
                                                <input type="text" class="form-control @error('address') is-invalid @enderror" name="address" value="{{ old('address') }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="form-group row">
                                            <label class="col-lg-3 col-form-label">Negara</label>
                                            <div class="col-lg-9">
                                                <input type="text" class="form-control @error('state') is-invalid @enderror" name="state" value="{{ old('state') }}">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-3 col-form-label">Asal</label>
                                            <div class="col-lg-9">
                                                <input type="text" placeholder="Kota Asal" class="form-control @error('city') is-invalid @enderror" name="city" value="{{ old('city') }}">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-3 col-form-label">Pekerjaan</label>
                                            <div class="col-lg-9">
                                                <input type="text" class="form-control @error('pekerjaan') is-invalid @enderror" name="pekerjaan" value="{{ old('pekerjaan') }}">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-3 col-form-label">No.KTP</label>
                                            <div class="col-lg-9">
                                                <input type="text" class="form-control @error('no_ktp') is-invalid @enderror" name="no_ktp" value="{{ old('no_ktp') }}">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="text-left lg" style="display: inline-block">
                                    <button type="submit" class="btn btn-success btn-lg">Submit</button>
                                </div>
                                
                                
                                
                            </form>
                            
                            
                               
                            <style>
                                .avatar {
                                    margin-right: 10px;
                                    border-radius: 50%;
                                 
                                }
                                .btn-success-wa
                                 {
                                    
                                    potition: absolute;
                                    margin-inline-end: 2rem;
                                    margin-right: 1rem;
                                    margin-top: 1rem
                                    right: 0;
                                    background-color: rgba(47, 202, 0, 0.966);
                                    border-radius: 30px;
                                    
                                }
                            </style>
                        
                    </div>
                    
                </div>
                            <div class="d-flex justify-content-between">
                                <a href="{{ url()->previous() }}" class="btn btn-primary btn-sm ml-2">Kembali</a>
                                <a href="{{ route('form/update/page') }}" class="btn btn-primary ml-auto btn-sm">Selanjutnya <i class="bi bi-arrow-right-circle"></i></a>
                            </div>
            </div>
        </div>
    </div>
</div>

                                
@endsection

                             


                            
                            




                               
                               

                               
                                

                                


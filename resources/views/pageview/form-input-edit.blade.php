
@extends('layouts.master')
@section('content')
    {{-- message --}}
    {!! Toastr::message() !!}
    <div class="page-wrapper">
        <div class="content container-fluid">
            <div class="page-header">
                <div class="row">
                    <div class="col">
                        <h3 class="page-title">Form View</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item active">Form Information View</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        
                        <div class="card-header">
                            <h4 class="card-title mb-0">Edit Form</h4>
           
                        </div>
                        <div class="card-body">
                            <h4 class="card-title">Personal Information</h4>
                            <form action="{{ route('form/input/update') }}" method="POST">
                                @csrf
                                <input type="hidden" name="id" value="{{ $formInputView->id }}">
                                <div class="row">
                                    <div class="col-xl-6">
                                        <div class="form-group row">
                                            <label class="col-lg-3 col-form-label">Nama Lengkap</label>
                                            <div class="col-lg-9">
                                                <input type="text" class="form-control @error('full_name') is-invalid @enderror" name="full_name" value="{{ $formInputView->full_name }}">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-3 col-form-label">Gender</label>
                                            <div class="col-lg-9">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input " type="radio" name="gender" id="gender_male" value="Male" {{ $formInputView->gender == 'Male' ? "checked" :"" }}>
                                                    <label class="form-check-label" for="gender_male">Pria</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="gender" id="gender_female" value="Female" {{ $formInputView->gender == 'Female' ? "checked" :"" }}>
                                                    <label class="form-check-label" for="gender_female">Wanita</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-3 col-form-label">Gol.Darah</label>
                                            <div class="col-lg-9">
                                                <select class="select @error('blood_group') is-invalid @enderror" name="blood_group">
                                                    <option value="A+" {{ $formInputView->blood_group == 'A+' ? "selected" :""}}>A+</option>
                                                    <option value="O+" {{ $formInputView->blood_group == 'O+' ? "selected" :""}}>O+</option>
                                                    <option value="B+" {{ $formInputView->blood_group == 'B+' ? "selected" :""}}>B+</option>
                                                    <option value="AB+" {{ $formInputView->blood_group == 'AB+' ? "selected" :""}}>AB+</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-3 col-form-label">Alamat</label>
                                            <div class="col-lg-9">
                                                <input type="text" class="form-control @error('address') is-invalid @enderror" name="address" value="{{ $formInputView->address }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="form-group row">
                                            <label class="col-lg-3 col-form-label">Negara</label>
                                            <div class="col-lg-9">
                                                <input type="text" class="form-control @error('state') is-invalid @enderror" name="state" value="{{ $formInputView->state }}">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-3 col-form-label">Asal</label>
                                            <div class="col-lg-9">
                                                <input type="text" placeholder="Kota Asal" class="form-control @error('city') is-invalid @enderror" name="city" value="{{ $formInputView->city }}">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-3 col-form-label">Pekerjaan</label>
                                            <div class="col-lg-9">
                                                <input type="text" class="form-control @error('pekerjaan') is-invalid @enderror" name="pekerjaan" value="{{ $formInputView->pekerjaan }}">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-3 col-form-label">No.KTP</label>
                                            <div class="col-lg-9">
                                                <input type="text" class="form-control @error('no_ktp') is-invalid @enderror" name="no_ktp" value="{{ $formInputView->no_ktp }}">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-left">
                                    <a href="{{ route('form/page/view') }}"  class="btn btn-primary btn-center m-auto "><i class="bi bi-arrow-left-square"></i> Kembali</a>
                                    <button type="submit" class="btn btn-primary">Update</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

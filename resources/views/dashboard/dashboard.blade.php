

@extends('layouts.master')
@section('content')

    {{-- <div class="page-wrapper m-7">
        
     <div class="col-8 justify-content-center m-5">
            <div class="card position-relative bg-inverse-dark" style="width: 22rem; ">
                <div class="card-img-top border-dark " alt="..."> 
                    <iframe class="card-img-top" src="https://www.youtube.com/embed/9g0EiKAuj2Y" allowfullscreen></iframe>
                </div>
                    <div class="card-body ">
                        <p class="card-text text-center">Acara Apel Pagi Di Kantor Desa Ciantra.</p>
                     </div>
            </div> 
            <div class="card position-relative bg-inverse-dark" style="width: 22rem; ">
                <div class="card-img-top border-dark " alt="..."> 
                    <iframe class="card-img-top" src="https://www.youtube.com/embed/vQtZyu1uIHw" allowfullscreen></iframe>
                </div>
                    <div class="card-body ">
                        <p class="card-text text-center">Penyegaran Keamanan Desa Ciantra.</p>
                     </div>
            </div> 
            <div class="card position-relative bg-inverse-dark" style="width: 22rem; ">
                <div class="card-img-top border-dark " alt="..."> 
                    <iframe class="card-img-top" src="https://www.youtube.com/embed/EvX7777MlBk"  allowfullscreen></iframe>
                </div>
                    <div class="card-body ">
                        <p class="card-text text-center">Pengadaan Razia Warung Miras.</p>
                     </div>
            </div> 
            <div class="card position-relative bg-inverse-dark" style="width: 22rem; ">
                <div class="card-img-top border-dark " alt="..."> 
                    <iframe class="card-img-top" src="https://www.youtube.com/embed/TpucKfBWfE8" allowfullscreen></iframe>
                </div>
                    <div class="card-body ">
                        <p class="card-text text-center">Pengadaan Vaksinasi Di Kantor Desa Ciantra.</p>
                     </div>
            </div> 

     </div>
    </div>  --}}

    <div class="page-wrapper m-7">
        <h1 class="justify-contennt-center">Selamat Datang {{ auth()->user()->nama }}!</h1>
        <div class="card-container">
          <div class="card position-relative bg-inverse-dark" style="width: 22rem;">
            <div class="card-img-top border-dark" alt="...">
              <iframe class="card-img-top" src="https://www.youtube.com/embed/9g0EiKAuj2Y" allowfullscreen></iframe>
            </div>
            <div class="card-body">
              <p class="card-text text-center">Acara Apel Pagi Di Kantor Desa Ciantra.</p>
            </div>
          </div>
          <div class="card position-relative bg-inverse-dark" style="width: 22rem;">
            <div class="card-img-top border-dark" alt="...">
              <iframe class="card-img-top" src="https://www.youtube.com/embed/vQtZyu1uIHw" allowfullscreen></iframe>
            </div>
            <div class="card-body">
              <p class="card-text text-center">Penyegaran Keamanan Desa Ciantra.</p>
            </div>
          </div>
          <div class="card position-relative bg-inverse-dark" style="width: 22rem;">
            <div class="card-img-top border-dark" alt="...">
              <iframe class="card-img-top" src="https://www.youtube.com/embed/EvX7777MlBk" allowfullscreen></iframe>
            </div>
            <div class="card-body">
              <p class="card-text text-center">Pengadaan Razia Warung Miras.</p>
            </div>
          </div>
          <div class="card position-relative bg-inverse-dark" style="width: 22rem;">
            <div class="card-img-top border-dark" alt="...">
              <iframe class="card-img-top" src="https://www.youtube.com/embed/TpucKfBWfE8" allowfullscreen></iframe>
            </div>
            <div class="card-body">
              <p class="card-text text-center">Pengadaan Vaksinasi Di Kantor Desa Ciantra.</p>
            </div>
          </div>
        </div>
      </div>
      
      <style>
        .card-container {
            margin: 4rem 5rem 5rem;
          display: flex;
          flex-wrap: wrap;
          justify-content: space-between;
        }
      
        .card {
          margin-bottom: 20px;
        }
      
        @media (max-width: 700px) {
          .card-container {
            flex-direction: column;
            align-items: center;
          }
        }
      </style>
      
@endsection


        
       

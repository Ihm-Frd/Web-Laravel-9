<!DOCTYPE html>

<html lang="en">
  <head>
    <meta charset="UTF-8" />

    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <meta http-equiv="X-UA-Compatible" content="ie=edge" />

    <link rel="stylesheet" href="{{  URL::to('assets/css/WAstyle.css') }}" />

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <!-- Bootstrap icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css" />
  </head>

  <body>
    <div class="container-contact100" style="background-image: url('{{ asset('assets/img/Wa.jpg') }}');">

      <div class="wrap-contact100">
        <form class="contact100-form validate-form" id="whatsapp">
          <span class="contact100-form-title"
            ><span>WhatsApp</span><i>Fast<i class="bi bi-lightning"></i></i
          ></span>

          <input class="tujuan" type="hidden" id="noAdmin" />

          <div class="wrap-input100">
            <span class="label-input100"><i class="bi bi-person-circle text-light"></i></span>

            <label>
              <input class="input100 nama" type="text" placeholder="Masukkan nama Anda" />
            </label>

            <span class="focus-input100"></span>
          </div>

          <div class="wrap-input100 justify-content-center">
            <span class="label-input100"><i class="bi bi-houses-fill text-light"></i></span>

            <label>
              <input class="input100 alamat" type="text" placeholder="Alamat(Rt/Rw No.rumah)" />
            </label>

            <span class="focus-input100"></span>
          </div>

          <div class="wrap-input100">
            <span class="label-input100"></span>

            <label>
              <textarea class="input100 pesan" placeholder="Masukkan Pesan Anda"></textarea>
            </label>

            <span class="focus-input100"></span>
          </div>

          <div class="container-contact100-form-btn">
            <div class="wrap-contact100-form-btn">
              <div class="contact100-form-bgbtn"></div>

              <a class="contact100-form-btn submit">Kirim <i class="bi bi-rocket-takeoff"></i></a>
    
            </div>
          </div>
          <br>
          <div class="wrap-contact100-form-btn">
          <a href=" {{ URL::previous() }}" type="button" class="btn btn-warning"><b>Kembali <i class="bi bi-box-arrow-left"></i> </b></a>
          </div>
        </form>
      </div>
    </div>

    <!-- Footer -->
    <footer class="bg-warning text-white text-center pb-5">
      <div class="links" style="font-size: 1.4rem; color: black; padding: 2rem 0.5rem">
        <a href="{{ URL::previous() }}"><b>Home</b></a>
      </div>

      <p>
        Created with <i class="bi bi-heart-pulse-fill text-danger"></i> by <a href="https://instagram.com/ihm_frds?igshid=MTIzZWQxMDU=" class="text-white fw-bold" target="blank">Ilham Firdaus<i class="bi bi-android2 text-success"></i></a>
      </p>
    </footer>
    <!-- Footer end -->
    <!-- Java skrip Submit WA  -->
    <script src="{{  URL::to('assets/js/WA.js') }}"></script>
    <!-- Java skrip Submit WA END  -->
  </body>
</html>

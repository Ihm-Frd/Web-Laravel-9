<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
 <!-- Bootstrap icon -->
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <!-- My CSS -->
    <link rel="stylesheet" href="{{ URL::to('assets/css/home.css') }}" />

    <title>Desa Ciantra</title><link rel="shortcut icon" type="image/x-icon" href="{{ URL::to('assets/img/ciantra.png') }}">

    <!-- icon -->
  </head>
  <body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-warning shadow-lg fixed-top">
      <div class="container">
        <a class="navbar-brand" href="./Responsive-Login-Form-master/index.html"
          ><b
            >Desa<span><i>Ciantra.com </i></span></b
          ></a
        >
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#home"><b>Home</b></a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="#about"><b>About</b></a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="#projects"><b>Project</b></a>
            </li>
            <li class="nav-item">
              <a class="nav-link active me-4" href="#contact"><b>Contact</b></a>
            </li>
            <br>
            <br>
            <li>
            <a href="{{ route('login') }}" class="btn btn-dark active position-relative">LOGIN <i class="bi bi-door-open"></i> </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Navbar end -->

    <!-- Hero section (Jumbotron) -->
    <section id="home" class="jumbotron text-center">
      <img src="{{ URL::to('assets/img/ciantra.png') }}" alt="Desa Ciantra" width="200" class="rounded-circle img-thumbnail" />
      <h1 class="display-4">Desa Ciantra</h1>
      <p class="lead">Situs Resmi Sistem Informasi Desa</p>
      <div class="d-grid gap-2 col-6 mx-auto">
        <a href="{{ route('login') }}" class="btn btn-dark active"><i class="bi bi-door-open"></i>Login Untuk Mendaftarkan Data Anda </a>
      </div>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path
          fill="#fff"
          fill-opacity="1"
          d="M0,96L60,106.7C120,117,240,139,360,165.3C480,192,600,224,720,213.3C840,203,960,149,1080,133.3C1200,117,1320,139,1380,149.3L1440,160L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z"
        ></path>
      </svg>
    </section>
    <!-- Hero section (Jumbotron) end -->

    <!-- Tentang Kami -->
    <section id="about">
      <div class="container">
        <div class="row text-center mb-3">
          <div class="col">
            <h2>Tentang Kami</h2>
          </div>
        </div>
        <div class="row justify-content-center fs-5 text-center">
          <div class="col-md-4">
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit illum cum corporis neque dolorem nam dicta ea ipsum soluta autem molestiae delectus aspernatur rerum beatae consequatur incidunt doloribus architecto, perspiciatis
              quaerat maxime in perferendis? Dicta dolorum eaque fugit, officiis aliquid quaerat, ut beatae, assumenda vitae qui ea natus velit quia!
            </p>
          </div>

          <div class="col-md-4">
            <p>
              Lorem ipsum dolor, sit amet consectetur adipisicing elit. Repellat, nostrum blanditiis. In dolorum pariatur eveniet qui eligendi incidunt maiores culpa dicta delectus, quos suscipit ea omnis quisquam tempore? Ad error commodi
              rem cupiditate possimus, delectus distinctio reprehenderit placeat sint, rerum velit illum nihil asperiores doloribus numquam quasi qui modi quod.
            </p>
          </div>
        </div>
      </div>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path
          fill="#fdf6b6"
          fill-opacity="1"
          d="M0,128L60,144C120,160,240,192,360,192C480,192,600,160,720,144C840,128,960,128,1080,149.3C1200,171,1320,213,1380,234.7L1440,256L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z"
        ></path>
      </svg>
    </section>
    <!-- Tentang Kami end -->

    <!-- Projects -->
    <section id="projects">
      <div class="container">
        <div class="row text-center mb-3">
          <div class="col">
            <h2>Projek Kami</h2>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-md-4 mb-3">
            <div class="card">
              <img src="{{ URL::to('assets/img/poverty.jpg') }}" class="card-img-top" alt="..." />
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="Galery.html" class="btn btn-dark">Go somewhere</a>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-3">
            <div class="card">
              <img src="{{ URL::to('assets/img/poverty.jpg') }}" class="card-img-top" alt="..." />
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="Galery.html" class="btn btn-dark">Go somewhere</a>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-3">
            <div class="card">
              <img src="{{ URL::to('assets/img/poverty.jpg') }}" class="card-img-top" alt="..." />
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="Galery.html" class="btn btn-dark">Go somewhere</a>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-3">
            <div class="card">
              <img src="{{ URL::to('assets/img/poverty.jpg') }}" class="card-img-top" alt="..." />
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="Galery.html" class="btn btn-dark">Go somewhere</a>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-3">
            <div class="card">
              <img src="{{ URL::to('assets/img/poverty.jpg') }}" class="card-img-top" alt="..." />
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="Galery.html" class="btn btn-dark">Go somewhere</a>
              </div>
            </div>
          </div>
          
      
         
        </div>
      </div>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path
          fill="#fff"
          fill-opacity="1"
          d="M0,224L60,213.3C120,203,240,181,360,197.3C480,213,600,267,720,266.7C840,267,960,213,1080,186.7C1200,160,1320,160,1380,160L1440,160L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z"
        ></path>
      </svg>
    </section>
    <!-- Projects end -->

    <!-- Kontak -->
    <section id="contact" class="contact">
      <h2><span>Kontak</span> Kami</h2>
      <p>
        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eius numquam
        unde reprehenderit perspiciatis iste? Perspiciatis quo error iure
        voluptatibus illum!
      </p>

      <div class="row">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d4060519.8976376825!2d107.101467!3d-6.348518!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e699a75804b340f%3A0xfa7d6ee25d81875b!2sKantor%20Desa%20Ciantra!5e0!3m2!1sid!2sid!4v1679564685038!5m2!1sid!2sid"  allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="map"></iframe>
        <div id="tombol" class="d-grid gap-2 col-6 mx-auto">
          <a class="btn btn-success" href="{{ route('submitWA') }}" target="_blank" role="button"><i class="bi bi-whatsapp">Responsif WhatsApp</i></a>  
          <a class="btn btn-primary" href="https://www.facebook.com/people/Pemdes-Ciantra/100069199301809" target="_blank"  role="button"><i class="bi bi-facebook">Link Facebook</i></a>  
          <a class="btn btn-info" href="https://twitter.com/pemdesciantra?t=rlVKgsKO5TyFVq_GqQZjZQ&s=09" target="_blank"  role="button"><i class="bi bi-twitter">Link Twitter</i></a>  
          <a class="btn btn-danger" href="mailto:romoajah@gmail.com?subject=WebSite Ciantra Official Mail Contact-Masyarakat%20Bertanya" target="_blank"  role="button"><i class="bi bi-envelope-at-fill"></i> Via E-mail</i></a>  
        </div>
      </div>
    </div>
  </section>
      
    
   <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#ffc107" fill-opacity="1" d="M0,160L40,176C80,192,160,224,240,208C320,192,400,128,480,133.3C560,139,640,213,720,234.7C800,256,880,224,960,229.3C1040,235,1120,277,1200,245.3C1280,213,1360,107,1400,53.3L1440,0L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z"></path></svg>  </section>
  </section>
   <!-- Kontak end -->

    <!-- Footer -->
    <footer class="bg-warning text-white text-center pb-5">

      <p>Created with <i class="bi bi-heart-pulse-fill text-danger"></i> by <a href="https://instagram.com/ihm_frds?igshid=MTIzZWQxMDU=" class="text-white fw-bold"  target="blank">Ilham Firdaus</a></p>
    </footer>
    <!-- Footer end -->

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>

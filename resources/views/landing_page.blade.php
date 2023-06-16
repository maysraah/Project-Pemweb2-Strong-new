<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Media Pembelajaran Python Dasar</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <!-- <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon"> -->

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('../resources')}}/aos//aos.css" rel="stylesheet">
  <link href="{{ asset('../resources')}}/css/bootstrap/bootstrap.min.css" rel="stylesheet">
  <link href="{{ asset('../resources')}}/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="{{ asset('../resources')}}/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="{{ asset('../resources')}}/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="{{ asset('../resources')}}/remixicon/remixicon.css" rel="stylesheet">
  <link href="{{ asset('../resources')}}/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('../resources')}}/css/style.css" rel="stylesheet">

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="landing_page.blade.php">STRONG</a></h1>


      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#desk">Deskripsi</a></li>
          <li><a class="nav-link scrollto" href="#materi">Materi</a></li>
          <li><a class="nav-link scrollto" href="#kuis">Kuis</a></li>
          <li><a class="nav-link scrollto" href="#team">Tim</a></li>
          @php
              if (Auth::user()->is_admin == 1) {
          @endphp
              <li><a class="nav-link scrollto" href="{{ route('admin.admin.index') }}">Admin</a></li>
          @php
              }
          @endphp
          {{-- <li></li>
          <li class="user me-3"> Halo, {{ Auth::user()->nama }}</li> --}}
          <li class="nav-link scrollto text-center"><a href="{{ route('login.logout') }}">LOGOUT</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
          <h1>Media Pembelajaran Python Dasar</h1>
          <!-- <h2>We are team of talented designers making websites with Bootstrap</h2> -->
          <div class="d-flex justify-content-center justify-content-lg-start">
            <a href="#desk" class="btn-get-started scrollto">Get Started</a>
          </div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
          <img src="{{ asset('../public')}}/storage/images/py.png" class="img-fluid animated" alt="">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Us Section ======= -->
    <section id="desk" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Deskripsi</h2>
        </div>

        <div class="row content" align="center">
            <p>
              Selamat datang di Website Media Pembelajaran Python Dasar! <br>
              Dalam website ini akan dibagikan materi mengenai bahasa pemrograman Python serta beberapa soal latihan yang bisa siswa ikuti.<br>
              Setelah mempelajari materi pada website ini, siswa diharapkan mampu memahami dan menerapkan bahasa pemrograman python dasar untuk membuat data.
        </div>

      </div>
    </section><!-- End About Us Section -->

  
    <!-- ======= Cta Section ======= -->
    <section id="materi" class="materi">
      <div class="container" data-aos="zoom-in">

        <div class="row">
          <div class="col-lg-9 text-center text-lg-start">
            <h3>Materi</h3>
            <p> Di halaman materi ini akan dibagikan bahan ajar seputar materi Python Dasar yang dapat dipelajari siswa. </p>
          </div>
          <div class="col-lg-3 cta-btn-container text-center">
            <a class="cta-btn align-middle" href="{{ route('halMateri.index') }}">Halaman Materi</a>
          </div>
        </div>

      </div>
    </section>
    <!-- End Cta Section -->

    <!-- ======= Cta Section ======= -->
    <section id="kuis" class="kuis">
      <div class="container" data-aos="zoom-in">

        <div class="row">
          <div class="col-lg-9 text-center text-lg-start">
            <h3>Kuis</h3>
            <p> Di halaman kuis ini akan disediakan soal-soal latihan mengenai materi yang sudah dipelajari di bagian Halaman Materi. </p>
          </div>
          <div class="col-lg-3 cta-btn-container text-center">
            <a class="cta-btn align-middle" href="{{ route('halKuis.index') }}">Halaman Kuis</a>
          </div>
        </div>

      </div>
    </section><!-- End Cta Section -->


    <!-- ======= Team Section ======= -->
    <section id="team" class="team section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Tim STRONG</h2>
          <p>Kami merupakan mahasiswa Program Studi Pendidikan Komputer, Fakultas Keguruan dan Ilmu Pendidikan, Universitas Lambung Mangkurat, Banjarmasin, Kalimantan Selatan.</p>
        </div>

      <div class="container">
        <div class="row justify-content-center">
        
          <div class="col-lg-6" data-aos="zoom-in" data-aos-delay="100">
            <div class="member d-flex align-items-start">
              <div class="pic"><img src="{{ asset('../public')}}/storage/images/may.png" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Maysarah</h4>
                <span>Ketua</span>
                <p>Mahasiswa semester 4, angkatan 2021</p>
                <div class="social">
                  <a href="https://instagram.com/maysraah?igshid=YmMyMTA2M2Y=" target="_blank"><i class="ri-instagram-fill"></i></a>
                  <a href="https://api.whatsapp.com/send?phone=6283153317243" target="_blank"><i class="ri-whatsapp-fill"></i></a>
                </div>
              </div>
            </div>
          </div>
        
          <div class="col-lg-6 mt-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="200">
            <div class="member d-flex align-items-start">
              <div class="pic"><img src="{{ asset('../public')}}/storage/images/nadia.png" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Egyn Terescova Nadia</h4>
                <span>Anggota</span>
                <p>Mahasiswa semester 4, angkatan 2021</p>
                <div class="social">
                  <a href="https://www.instagram.com/sweettokki/" target="_blank"><i class="ri-instagram-fill"></i></a>
                  <a href="#" target="_blank"><i class="ri-whatsapp-fill"></i></a>
                </div>
              </div>
            </div>
          </div>
        
          <div class="col-lg-6 mt-4 " data-aos="zoom-in" data-aos-delay="300">
            <div class="member d-flex align-items-start">
              <div class="pic"><img src="{{ asset('../public')}}/storage/images/tata.png" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Putri Tari Lestari</h4>
                <span>Anggota</span>
                <p>Mahasiswa semester 4, angkatan 2021</p>
                <div class="social">
                  <a href="https://www.instagram.com/putri_htta06/" target="_blank"><i class="ri-instagram-fill"></i></a>
                  <a href="#" target="_blank"><i class="ri-whatsapp-fill"></i></a>
                </div>
              </div>
            </div>
          </div>
        
        </div>
      </div>
      
    </section><!-- End Team Section -->

  </main><!-- End #main -->


    <div class="container footer-bottom clearfix">
      <div class="copyright">
        &copy; Copyright <strong><span>Arsha</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/ -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{ asset('../resources')}}/aos/aos.js"></script>
  <script src="{{ asset('../resources')}}/js/bootstrap_js/bootstrap.bundle.min.js"></script>
  <script src="{{ asset('../resources')}}/glightbox/js/glightbox.min.js"></script>
  <script src="{{ asset('../resources')}}/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="{{ asset('../resources')}}/swiper/swiper-bundle.min.js"></script>
  <script src="{{ asset('../resources')}}/waypoints/noframework.waypoints.js"></script>
  <script src="{{ asset('../resources')}}/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('../resources')}}/js/main.js"></script>

</body>

</html>
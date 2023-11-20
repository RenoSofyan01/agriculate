<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
  
    <title>Beranda - Agriculate</title>
    <meta content="" name="description">
    <meta content="" name="keywords">
  
    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
  
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
  
    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  
    <!-- Template Main CSS File -->
    <link href="assets/css/main.css" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
  
    <!-- Ini style custom buat ganti warna hijau -->
    <style> 
    #header {
      background-color: rgb(2, 92, 46, 0.8);
    }
    .breadcrumbs .page-header:before {
      background-color: rgb(2, 92, 46, 0.6);
      }
    .about .section-header h2 .content h3 {
      color: #025c2e;
      }
    @media (max-width: 1279px) {
    .navbar ul {
      background: rgb(2, 92, 46, 0.8);
  }
    .mobile-nav-active .navbar:before {
      background: rgba(45, 45, 45, 0.8);
  }
    .breadcrumbs .page-header:before {
      background-color: rgb(2, 92, 46, 0.6);
    }}
    .testimonials::before {
      background: rgb(2, 92, 46, 0.7);
  }
    #footer {
      background-color: #025c2e;
  }

  /* CSS buat Popup login register */
  .popup-form {
        max-width: 400px;
        margin: 100px auto;
      }
      .btn-primary,
.btn-primary:hover,
.btn-primary:active,
.btn-primary:focus {
    color: #fff;
    background-color: #025c2e;
    border-color: #025c2e;
}

    </style>
</head>
  <body>
    <!-- ======= Header ======= -->
  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <img src="assets/img/logo.png" alt="">
        <!-- <h1>Logis</h1> -->
      </a>

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

      <?php
if (isset($_SESSION['nama'])) {
    // Jika sudah login, ambil nama pengguna dari session
    $nama = $_SESSION['nama'];
    ?>

    <nav id="navbar" class="navbar">
        <ul>
            <li><a href="index.php" class="active">Beranda</a></li>
            <li><a href="kemitraan.php">Kemitraan</a></li>
            <li><a href="forum.php">Forum</a></li>
            <li><a href="about.php">Tentang Kami</a></li>
            <li class="dropdown"><a href="#"><span>Hai, <?php echo $nama; ?></span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              <li><a href="profil.php">Edit Profil</a></li>
              <li><a href="logout.php">Keluar</a></li>
            </ul>
          </li>
        </ul>
    </nav><!-- .navbar -->

<?php         
} else {
    // Jika belum login, tampilkan tombol login
    ?>

    <nav id="navbar" class="navbar">
        <ul>
        <li><a href="index.php" class="active">Beranda</a></li>
            <li><a href="kemitraan.php">Kemitraan</a></li>
            <li><a href="forum.php">Forum</a></li>
            <li><a href="about.php">Tentang Kami</a></li>
            <li><a href="#" data-toggle="modal" data-target="#loginModal">Daftar / Masuk</a></li>
        </ul>
    </nav><!-- .navbar -->

<?php
}
?>

    </div>

    <!-- Modal login -->
    <div
      class="modal fade"
      id="loginModal"
      tabindex="-1"
      role="dialog"
      aria-labelledby="loginModalLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="loginModalLabel">Masuk</h5>
            <button
              type="button"
              class="close"
              data-dismiss="modal"
              aria-label="Close"
            >
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <!-- Login Form -->
            <form method="POST" action="login.php">
              <div class="form-group">
                <label for="loginEmail">Email</label>
                <input
                  type="email"
                  name="email"
                  class="form-control"
                  id="loginEmail"
                  aria-describedby="emailHelp"
                  placeholder="Masukkan email"
                />
              </div>
              <div class="form-group">
                <label for="loginPassword">Kata sandi</label>
                <input
                  type="password"
                  name="password"
                  class="form-control"
                  id="loginPassword"
                  placeholder="Masukkan kata sandi"
                />
              </div>
              <button type="submit" class="btn btn-primary">Masuk</button>
            </form>
            <p class="mt-3">
              Belum punya akun?
              <a
                href="#"
                data-dismiss="modal"
                data-toggle="modal"
                data-target="#registerModal"
                >Daftar disini</a
              >
            </p>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal register -->
    <div
      class="modal fade"
      id="registerModal"
      tabindex="-1"
      role="dialog"
      aria-labelledby="registerModalLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="registerModalLabel">Daftar</h5>
            <button
              type="button"
              class="close"
              data-dismiss="modal"
              aria-label="Close"
            >
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">

            <!-- Register Form -->
            
            <form action = "daftar.php" method="POST">
              <div class="form-group">
                <label for="registerName">Nama</label>
                <input
                  type="text"
                  name="nama"
                  class="form-control"
                  id="registerName"
                  placeholder="Nama"
                />
              </div>
              <div class="form-group">
                <label for="registerEmail">Alamat Email</label>
                <input
                  type="email"
                  name="email"
                  class="form-control"
                  id="registerEmail"
                  aria-describedby="emailHelp"
                  placeholder="Masukkan email"
                />
              </div>
              <div class="form-group">
                <label for="registerPassword">Kata sandi</label>
                <input
                  type="password"
                  name="password"
                  class="form-control"
                  id="registerPassword"
                  placeholder="Masukkan kata sandi"
                />
              </div>
              <button type="submit" class="btn btn-primary">Daftar</button>
            </form>
          </div>
        </div>
      </div>
    </div>

  </header><!-- End Header -->
  <!-- End Header -->

    <!-- Chatbot -->
    <script>
      window.embeddedChatbotConfig = {
      chatbotId: "0HHI_IudL55-rbWqNKOIH",
      domain: "www.chatbase.co"
      }
      </script>
      <script
      src="https://www.chatbase.co/embed.min.js"
      chatbotId="0HHI_IudL55-rbWqNKOIH"
      domain="www.chatbase.co"
      defer>
      </script>
    <!-- End Chatbot -->

<!-- ======= Hero Section ======= -->
<section id="hero" class="hero d-flex align-items-center" style="background-color: #025c2e; color: white;">
  <div class="container-fluid">
    <div class="row gy-4 d-flex justify-content-between">

      <div class="col-lg-6 order-lg-2 d-flex flex-column justify-content-center">
        <h2 data-aos="fade-up" style="color: white;">Selamat datang di Agriculate</h2>
        <p data-aos="fade-up" data-aos-delay="400">Mempertahankan ketahanan pangan, memberdayakan masa depan.</p>
      </div>

      <div class="col-lg-5 order-lg-1 hero-img d-flex justify-content-center mb-4" data-aos="zoom-out">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126829.33545420082!2d106.70948989901478!3d-6.595016204393127!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69c5b7ad0f824b%3A0x4c71fd1b0b8ae76d!2sBogor%20City%2C%20West%20Java!5e0!3m2!1sen!2sid!4v1698292741576!5m2!1sen!2sid" width="100%" height="350" style="border: 2px; border-radius: 10px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>

    </div>
  </div>
</section><!-- End Hero Section -->

<main id="main">
<!-- ======= Featured Services Section ======= -->
<section id="featured-services" class="featured-services" style="border-radius: 10px; overflow: hidden;">
  <div class="container" data-aos="fade-up">
    <!-- Konten Featured Services -->
    <a class="weatherwidget-io" href="https://forecast7.com/en/n0d79113d92/indonesia/" data-label_1="INDONESIA" data-label_2="WEATHER" data-icons="Climacons Animated" data-theme="dark" style="color: black; border-radius: 10px; overflow: hidden;">INDONESIA WEATHER</a>
    <script>
      !function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src='https://weatherwidget.io/js/widget.min.js';fjs.parentNode.insertBefore(js,fjs);}}(document,'script','weatherwidget-io-js');
    </script>
  </div>
</section><!-- End Featured Services Section -->


    <!-- ======= BERITA TERKINI ======= -->
<section id="service" class="services pt-0" style="background-color: #f8f9fa;">
  <div class="container" data-aos="fade-up">
    <div class="section-header">
      <span>Berita Terkini</span>
      <h2>Berita Terkini</h2>
    </div>
    <div class="row gy-4">
      <!-- Kode untuk setiap kartu berita -->
      <!-- Kartu Berita 1 -->
      <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
        <div class="card" style="border-radius: 10px; overflow: hidden;">
          <div class="card-img">
            <img src="assets/img/artikel1.jpg" alt="" class="img-fluid">
          </div>
          <h3><a href="artikel1.php" class="stretched-link">Pentingnya Pengelolaan Tanah</a></h3>
          <p>Tanah adalah salah satu sumber daya alam yang paling penting dan berperan kunci dalam keberlangsungan kehidupan di Bumi. Pengelolaan tanah yang..</p>
        </div>
      </div><!-- End Card Item -->
      <!-- Kartu Berita 2 -->
      <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
        <div class="card" style="border-radius: 10px; overflow: hidden;">
          <div class="card-img">
            <img src="assets/img/artikel2.jpg" alt="" class="img-fluid">
          </div>
          <h3><a href="artikel2.php" class="stretched-link">Strategi Berkelanjutan untuk Pengelolaan Tanah</a></h3>
          <p>Pengelolaan tanah yang berkelanjutan adalah kunci untuk mempertahankan produktivitas pertanian jangka panjang..</p>
        </div>
      </div><!-- End Card Item -->
      <!-- Kartu Berita 3 -->
      <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
        <div class="card" style="border-radius: 10px; overflow: hidden;">
          <div class="card-img">
            <img src="assets/img/artikel3.jpg" alt="" class="img-fluid">
          </div>
          <h3><a href="artikel3.php" class="stretched-link">Faktor-faktor yang Mempengaruhi Kualitas Tanah</a></h3>
          <p>Kualitas tanah adalah aspek kunci dalam keberhasilan pertanian. Faktor-faktor yang mempengaruhi kualitas tanah sangat beragam..</p>
        </div>
      </div><!-- End Card Item -->
      <!-- Kartu Berita 4 -->
      <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
        <div class="card" style="border-radius: 10px; overflow: hidden;">
          <div class="card-img">
            <img src="assets/img/artikel4.jpg" alt="" class="img-fluid">
          </div>
          <h3><a href="artikel4.php" class="stretched-link">Tantangan dan Kendala dalam Mengelola Ketahanan Pangan di Sektor Pertanian Indonesia</a></h3>
          <p>Sektor pertanian memiliki peran krusial dalam memastikan ketersediaan pangan bagi penduduk Indonesia. Meskipun demikian, masih terdapat berbagai kendala dan tantangan </p>
        </div>
      </div><!-- End Card Item -->
      <!-- Kartu Berita 5 -->
      <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
        <div class="card" style="border-radius: 10px; overflow: hidden;">
          <div class="card-img">
            <img src="assets/img/artikel5.jpg" alt="" class="img-fluid">
          </div>
          <h3><a href="artikel5.php" class="stretched-link">'Food Estate' Strategi Ambisius Indonesia dalam Meningkatkan Ketahanan Pangan</a></h3>
          <p>Konsep ambisius yang diperkenalkan oleh pemerintah Indonesia untuk memperkuat ketahanan pangan negara ini. Program ini dirancang untuk mengoptimalkan</p>
        </div>
      </div><!-- End Card Item -->
      <!-- Kartu Berita 6 -->
      <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
        <div class="card" style="border-radius: 10px; overflow: hidden;">
          <div class="card-img">
            <img src="assets/img/artikel6.jpg" alt="" class="img-fluid">
          </div>
          <h3><a href="artikel6.php" class="stretched-link">Teknologi Inovatif Untuk Meningkatkan Ketahanan Pangan di Indonesia</a></h3>
          <p>Dalam menghadapi tantangan ketahanan pangan di Indonesia, teknologi memainkan peran penting dalam meningkatkan produktivitas pertanian, mengelola sumber daya</p>
        </div>
      </div><!-- End Card Item -->
    </div>
  </div>
</section><!-- End BERITA TERKINI Section -->


    <!-- ======= MITRA KAMI ======= -->
    <section id="hero" class="hero d-flex align-items-center justify-content-center">
      <div class="row gy-1" data-aos="fade-up" data-aos-delay="400">
        <h3 class="text-center">Mitra Kami</h3>
        <div class="col-lg-3 col-6">
          <div class="stats-item text-center w-100 h-100">
            <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1" class="purecounter"></span>
            <p>Pemilik Lahan</p>
          </div>
        </div><!-- End Stats Item -->
    
        <div class="col-lg-3 col-6">
          <div class="stats-item text-center w-100 h-100">
            <span data-purecounter-start="0" data-purecounter-end="52" data-purecounter-duration="1" class="purecounter"></span>
            <p>Perusahaan Swasta</p>
          </div>
        </div><!-- End Stats Item -->
    
        <div class="col-lg-3 col-6">
          <div class="stats-item text-center w-100 h-100">
            <span data-purecounter-start="0" data-purecounter-end="53" data-purecounter-duration="1" class="purecounter"></span>
            <p>Pemerintah</p>
          </div>
        </div><!-- End Stats Item -->
    
        <div class="col-lg-3 col-6">
          <div class="stats-item text-center w-100 h-100">
            <span data-purecounter-start="0" data-purecounter-end="3232" data-purecounter-duration="1" class="purecounter"></span>
            <p>Total Pengguna</p>
          </div>
        </div><!-- End Stats Item -->
    
      </div>
    </section><!-- End MITRA KAMI Section -->    

  </main><!-- End #main -->

    <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

    <div class="container">
      <div class="row gy-4">
        <div class="col-lg-5 col-md-12 footer-info">
          <a href="index.html" class="logo d-flex align-items-center">
            <img src="assets/img/logo.png" alt="Logo">
            <span>Agriculate</span>
          </a>
          <p>Agriculate adalah sistem yang dibuat untuk memberikan solusi atas permasalahan pangan di Indonesia. Sistem yang dibangun adalah aplikasi berbasis web.</p>
          <div class="social-links d-flex mt-4">
            <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
            <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
            <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
            <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
          </div>
        </div>

        <div class="col-lg-2 col-6 footer-links">
          <h4>Tautan</h4>
          <ul>
            <li><a href="index.html" class="active">Beranda</a></li>
            <li><a href="Kemitraan.html">Kemitraan</a></li>
            <li><a href="forum.html">Forum</a></li>
            <li><a href="about.html" >Tentang Kami</a></li>
          </ul>
        </div>

        <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
          <h4>Kontak Kami</h4>
          <p>
            Jl. Kumbang No.14, RT.02/RW.06<br>
            Babakan, Kecamatan Bogor Tengah<br>
            Kota Bogor, Jawa Barat 16128 <br><br>
            <strong>Telepon:</strong> +62 813 5388 5383<br>
            <strong>Email:</strong> agriculate@gmail.com<br>
          </p>

        </div>

      </div>
    </div>

    <div class="container mt-4">
      <div class="copyright">
        &copy; 2023 <strong><span>Agriculate</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        Designed by <a href="#">Agriculate</a>
      </div>
    </div>

  </footer><!-- End Footer -->
  <!-- End Footer -->

  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

  <!-- Js buat popup login register -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <script>
    $(document).ready(function () {
      // Menangani acara tampilan modal
      $('#loginModal, #registerModal').on('show.bs.modal', function (e) {
        // Nonaktifkan backdrop untuk modal tertentu
        $(this).data('bs.modal')._config.backdrop = false;
      });
  
      // Menangani acara menyembunyikan modal
      $('#loginModal, #registerModal').on('hidden.bs.modal', function (e) {
        // Mengaktifkan kembali backdrop setelah modal tertutup
        $(this).data('bs.modal')._config.backdrop = true;
      });
    });
  </script>
  
  
  </body>
</html>

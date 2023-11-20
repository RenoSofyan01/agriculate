<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <title>Kemitraan - Agriculate</title>
    <meta content="" name="description" />
    <meta content="" name="keywords" />

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon" />
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon" />

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet"
    />

    <!-- Vendor CSS Files -->
    <link
      href="assets/vendor/bootstrap/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <link
      href="assets/vendor/bootstrap-icons/bootstrap-icons.css"
      rel="stylesheet"
    />
    <link
      href="assets/vendor/fontawesome-free/css/all.min.css"
      rel="stylesheet"
    />
    <link
      href="assets/vendor/glightbox/css/glightbox.min.css"
      rel="stylesheet"
    />
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet" />
    <link href="assets/vendor/aos/aos.css" rel="stylesheet" />

    <!-- Template Main CSS File -->
    <link href="assets/css/main.css" rel="stylesheet" />
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
        <li><a href="index.php">Beranda</a></li>
            <li><a href="kemitraan.php" class="active">Kemitraan</a></li>
            <li><a href="forum.php">Forum</a></li>
            <li><a href="about.php">Tentang Kami</a></li>
            <li class="dropdown"><a href="#"><span>Hai, <?php echo $nama; ?></span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              <li><a href="#">Edit Profil</a></li>
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

    <main id="main">
      <!-- ======= Breadcrumbs ======= -->
      <div class="breadcrumbs">
        <div
          class="page-header d-flex align-items-center"
          style="background-image: url('assets/img/header-artikel.jpg')"
        >
          <div class="container position-relative">
            <div class="row d-flex justify-content-center">
              <div class="col-lg-6 text-center">
                <h2>Mitra</h2>
                <p>
                  Memberikan solusi dan cara seputar ketahanan pangan.
                </p>
              </div>
            </div>
          </div>
        </div>
        <nav>
          <div class="container">
            <ol>
              <li><a href="index.php">Beranda</a></li>
              <li>Kemitraan</li>
            </ol>
          </div>
        </nav>
      </div>
      <!-- End Breadcrumbs -->

      <!-- ======= Service Details Section ======= -->
      <section id="service-details" class="service-details">
        <div class="container" data-aos="fade-up">
          <div class="row gy-4"></div>

            <div class="col-lg-8">
              <img
                src="assets/img/tanah6.jpg"
                alt="" 
                class="img-fluid services-img"
              />
              <h3>
                Pentingnya Pengelolaan Tanah: Fondasi untuk Kesejahteraan
                Lingkungan dan Kesejahteraan Manusia
              </h3>
              <p>
                Tanah adalah salah satu sumber daya alam yang paling penting dan
                berperan kunci dalam keberlangsungan kehidupan di Bumi.
                Pengelolaan tanah yang bijak dan berkelanjutan menjadi esensial
                dalam memastikan kelangsungan hidup manusia, keberlanjutan
                lingkungan, dan kelestarian ekosistem. Artikel ini akan mengulas
                betapa pentingnya pengelolaan tanah dalam konteks global, dan
                bagaimana hal ini mempengaruhi berbagai aspek kehidupan manusia.
              </p>
              <ul>
                <li>
                  <i class="bi bi-check-circle"></i>
                  <span>Mengamankan Ketahanan Pangan</span>
                </li>
                <p>
                  Tanah adalah pangkalan utama bagi produksi makanan. Dengan
                  mengelola tanah dengan baik, kita dapat meningkatkan
                  produktivitas pertanian dan memastikan ketersediaan pangan
                  yang memadai untuk populasi yang terus bertambah.
                </p>
                <li>
                  <i class="bi bi-check-circle"></i>
                  <span>Konservasi Sumber Daya Alami</span>
                </li>
                <p>
                  Tanah yang sehat memainkan peran penting dalam konservasi
                  sumber daya alam. Dengan menerapkan praktik-praktik
                  pengelolaan tanah yang tepat, kita dapat mengurangi erosi
                  tanah, menjaga kualitas air, dan meminimalkan pencemaran
                  lingkungan.
                </p>
                <li>
                  <i class="bi bi-check-circle"></i>
                  <span>Pengendalian Perubahan Iklim</span>
                </li>
                <p>
                  Tanah yang sehat berperan sebagai penyimpanan karbon alami.
                  Dengan menjaga kelestarian tanah, kita dapat membantu dalam
                  upaya global untuk mengurangi emisi gas rumah kaca dan
                  memitigasi dampak perubahan iklim.
                </p>
                <i class="bi bi-check-circle"></i>
                  <span>Mengelola Ketersediaan Air</span>
                </li>
                <p>
                  Tanah yang dikelola dengan baik dapat membantu mengatur siklus 
                  air dan mempertahankan kelembaban yang diperlukan untuk pertanian 
                  dan kehidupan hewan.
                </p>
                <i class="bi bi-check-circle"></i>
                  <span>Mengurangi Kerentanan terhadap Bencana Alam</span>
                </li>
                <p>
                  Tanah yang kokoh dan sehat dapat membantu mengurangi dampak bencana 
                  alam seperti banjir dan longsor. Praktik pengelolaan tanah yang benar 
                  dapat meminimalkan risiko kerusakan akibat bencana alam.
                </p>
                <i class="bi bi-check-circle"></i>
                  <span>Mendukung Keanekaragaman Hayati</span>
                </li>
                <p>
                  Tanah yang sehat adalah rumah bagi berbagai makhluk hidup, termasuk 
                  mikroorganisme, tanaman, dan hewan. Dengan merawat tanah dengan benar, 
                  kita dapat mempertahankan keanekaragaman hayati yang kritis untuk 
                  keseimbangan ekosistem.
                </p>
                <i class="bi bi-check-circle"></i>
                  <span>Mengamankan Mata Pencaharian Petani</span>
                </li>
                <p>
                  Petani adalah kelompok utama yang bergantung pada tanah untuk penghidupan 
                  mereka. Dengan mempromosikan praktik pengelolaan tanah yang berkelanjutan, 
                  kita dapat memastikan keberlanjutan mata pencaharian petani dan mendorong 
                  pertumbuhan ekonomi di sektor pertanian.
                </p>
              </ul>
              <p>
                Pengelolaan tanah yang bijak dan berkelanjutan adalah kunci untuk memastikan 
                kesejahteraan manusia, keberlangsungan ekosistem, dan kelangsungan hidup 
                planet ini. Dengan memahami dan mengimplementasikan praktik-praktik pengelolaan 
                tanah yang tepat, kita dapat membangun fondasi yang kokoh untuk masa depan 
                yang berkelanjutan bagi generasi-generasi mendatang. Tindakan bersama dari 
                pemerintah, masyarakat, dan sektor pertanian sangatlah penting dalam mewujudkan visi ini.
              </p>
            </div>
          </div>
        </div>
      </section>
      <!-- End Service Details Section -->
    </main>
    <!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">
      <div class="container">
        <div class="row gy-4">
          <div class="col-lg-5 col-md-12 footer-info">
            <a href="index.html" class="logo d-flex align-items-center">
              <img src="assets/img/logo.png" alt="Logo" />
              <span>Agriculate</span>
            </a>
            <p>
              Agriculate adalah sistem yang dibuat untuk memberikan solusi atas
              permasalahan pangan di Indonesia. Sistem yang dibangun adalah
              aplikasi berbasis web.
            </p>
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
              <li><a href="about.html">Tentang Kami</a></li>
            </ul>
          </div>

          <div
            class="col-lg-3 col-md-12 footer-contact text-center text-md-start"
          >
            <h4>Kontak Kami</h4>
            <p>
              Jl. Kumbang No.14, RT.02/RW.06<br />
              Babakan, Kecamatan Bogor Tengah<br />
              Kota Bogor, Jawa Barat 16128 <br /><br />
              <strong>Telepon:</strong> +62 813 5388 5383<br />
              <strong>Email:</strong> agriculate@gmail.com<br />
            </p>
          </div>
        </div>
      </div>

      <div class="container mt-4">
        <div class="copyright">
          &copy; 2023 <strong><span>Agriculate</span></strong
          >. All Rights Reserved
        </div>
        <div class="credits">Designed by <a href="#">Agriculate</a></div>
      </div>
    </footer>
    <!-- End Footer -->
    <!-- End Footer -->

    <a
      href="#"
      class="scroll-top d-flex align-items-center justify-content-center"
      ><i class="bi bi-arrow-up-short"></i
    ></a>

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
  </body>
</html>

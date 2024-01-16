<?php
session_start();
include('includes/config.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>P4S Purileisa</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.css" />
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
  <link rel="stylesheet" href="assets/css/style.css" />
  <link rel="icon" href="assets/images/image 1.svg" type="image/x-icon" />
  <link rel="shortcut icon" href="assets/images/image 1.svg" type="image/x-icon" />
</head>

<body data-bs-spy="scroll" data-bs-target=".navbar">
  <!-- NAVBAR -->
  <nav class="navbar navbar-expand-lg bg-white sticky-top">
    <div class="container">
      <a class="navbar-brand" href="#">
        <img src="./assets/images/image 1.svg" alt="" width="100px" />
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#about">Tentang</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#blog">Kegiatan</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#portfolio">Gallery</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#team">Team</a>
          </li>
        </ul>
        <a href="news.php" class="btn btn-outline-success ms-2">Berita</a>
        <a href="product.php" class="btn btn-outline-success ms-2">Produk Kami</a>
        <a href="daftar.html" class="btn btn-success ms-2">Daftar Sekarang</a>
      </div>
    </div>
  </nav>

  <!-- HERO -->
  <section id="hero" class="min-vh-100 d-flex align-items-center text-center">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <h1 data-aos="fade-left" class="text-uppercase text-white fw-semibold display-4">
            Selamat Datang di P4S Purileisa
          </h1>
          <h5 class="text-white mt-3 mb-4" data-aos="fade-right">
            Pusat Pelatihan dan Perdesaan Swadaya
          </h5>
          <div data-aos="fade-up" data-aos-delay="50">
            <a href="daftar.html" class="btn btn-success btn-lg">Daftar Sekarang</a>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- Supported by -->
  <div class="container">
    <div class="row">
      <div class="col-12 text-center" data-aos="fade-down" data-aos-delay="50">
        <div class="section-title">
          <h3 class="display-10 fw-semibold">Supported by</h3>
          <div class="image-container">
            <img src="assets/images/logo.svg" alt="Supported by" class="img-fluid" style="max-width: 200px" />
            <img src="assets/images/ruhui.svg" alt="Supported by" class="img-fluid" style="max-width: 200px" />
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- ABOUT -->
  <section id="about" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="col-12 text-center" data-aos="fade-down" data-aos-delay="150">
          <div class="section-title">
            <h1 class="display-4 fw-semibold">Visi dan Misi</h1>
            <div class="line"></div>
            <div class="image-container">
              <img src="assets/images/image 1.svg" alt="Supported by" class="img-fluid" style="max-width: 150px" />
              <img src="assets/images/p4s.svg" alt="Supported by" class="img-fluid" style="max-width: 200px" />
              <p>Pusat Pelatihan Pertanian dan perdesaan Swadaya (P4S)</p>
            </div>
          </div>
        </div>

        <div class="text-left" data-aos="fade-down" data-aos-delay="50">
          <h2 class="display-6 fw-normal text-center">Visi :</h2>
          <p class="text-center m-auto">
            Menjadi Pusat Pelatihan Pertanian dan Perdesaan Swadaya yang terpercaya dalam membangun pertanian regeneratif,
            berbiaya eksternal rendah, mandiri, berkelanjutan, sanggup beradaptasi dan mendukung mitigasi perubahan iklim
            berbasis sumberdaya lokal pada tahun 2024
          </p>
        </div>

        <div data-aos="fade-down" data-aos-delay="50">
          <div>
            <h2 class="display-6 fw-normal text-center">Misi :</h2>
            <ol type="1" class="m-auto">
              <li class="p-1">Senantiasa berinovasi dan berkreasi atas praktek pertanian yang ilmiah & aplikatif</li>
              <li class="p-1">Melakukan riset mandiri atau berkolaborasi dengan stakeholder pertanian lain untuk sarana produksi dan teknik praktek pertanian LEISA (low external inputs sustainable agriculture).</li>
              <li class="p-1">Mengekplorasi, mengeksploitasi, merehabilitasi, merestorasi dan melestarikan sumberdaya lokal pendukung pertanian.</li>
              <li class="p-1">Mensosialisasikan dan mempromosikan praktek pertanian yang menjaga agroekologi, ramah lingkungan dan cerdas iklim.</li>
              <li class="p-1">Mengembangkan praktek ekonomi pertanian sirkular bagi pencapaian kesejahteraan petani.</li>
            </ol>
          </div>
        </div>

        <div class="d-flex justify-content-center" data-aos="fade-down" data-aos-delay="50">
          <div>
            <h2 class="display-6 fw-normal text-center">Aksi :</h2>
            <ol type="1" class="m-auto">
              <li class="p-1">Mengembangkan sarana produksi; pembenah tanah, pupuk organik & hayati, pestisida, feed aditive, dan produk pendukung kesehatan lingkungan pertanian.</li>
              <li class="p-1">Mengembangkan prasarana produksi yang efisien dan efektif</li>
            </ol>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- Our job -->
  <section id="blog" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="col-12 text-center" data-aos="fade-down" data-aos-delay="150">
          <div class="section-title">
            <h1 class="display-4 fw-semibold">Kegiatan Kami</h1>
            <div class="line"></div>
            <p>kami sebagai pelaku kegiatan banyak sekali kegiatan pelaksanaan yang dilakukan.</p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4" data-aos="fade-down" data-aos-delay="150">
          <div class="team-member image-zoom">
            <div class="image-zoom-wrapper">
              <img src="./assets/images/blogpost1.svg" alt="" />
            </div>
            <h5 class="mt-4">pelatihan</h5>
            <p>P4S sebagai Tempat Pelatihan Swadaya dalam meningkatkan kemampuan Petani dan masyarakat sekitar.</p>
          </div>
        </div>
        <div class="col-md-4" data-aos="fade-down" data-aos-delay="250">
          <div class="team-member image-zoom">
            <div class="image-zoom-wrapper">
              <img src="./assets/images/blogpost2.svg" alt="" />
            </div>
            <h5 class="mt-4">Permagangan</h5>
            <p>
              P4S sebagai tempat permagangan bagi pelajar, mahasiswa dan masyarakat untuk memberikan pengalaman di
              bidang pertanian.
            </p>
          </div>
        </div>
        <div class="col-md-4" data-aos="fade-down" data-aos-delay="350">
          <div class="team-member image-zoom">
            <div class="image-zoom-wrapper">
              <img src="./assets/images/blogpost3.svg" alt="" />
            </div>
            <h5 class="mt-4">Bisnis</h5>
            <p>
              P4S melakukan kegiatan proses bisnis produk pertaniaan dalam rangkat meningkatkan ekonomi/pendapatan
              keluarga.
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- COUNTER -->
  <section id="counter" class="section-padding">
    <div class="container text-center">
      <div class="row g-4">
        <h3 class="display-10 fw-bold text-white">Klasifikasi P4S</h3>
        <div class="col-lg-3 col-sm-6" data-aos="fade-down" data-aos-delay="150">
          <h1 class="text-white display-4">572</h1>
          <h6 class="text-uppercase mb-0 text-white mt-3">Pratama</h6>
        </div>
        <div class="col-lg-3 col-sm-6" data-aos="fade-down" data-aos-delay="250">
          <h1 class="text-white display-4">588</h1>
          <h6 class="text-uppercase mb-0 text-white mt-3">Madya</h6>
        </div>
        <div class="col-lg-3 col-sm-6" data-aos="fade-down" data-aos-delay="350">
          <h1 class="text-white display-4">152</h1>
          <h6 class="text-uppercase mb-0 text-white mt-3">Utama</h6>
        </div>
        <div class="col-lg-3 col-sm-6" data-aos="fade-down" data-aos-delay="450">
          <h1 class="text-white display-4">1282</h1>
          <h6 class="text-uppercase mb-0 text-white mt-3">Total</h6>
        </div>
      </div>
    </div>
  </section>

  <!-- PORTFOLIO -->
  <section id="portfolio" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="col-12 text-center" data-aos="fade-down" data-aos-delay="150">
          <div class="section-title">
            <h1 class="display-4 fw-semibold">Galeri Kegiatan</h1>
            <div class="line"></div>
            <p>Dokumentasi keterlibatan kami dengan berbagai lapisan dan lembaga kegiatan</p>
          </div>
        </div>
      </div>
      <div class="row g-3">
        <div class="col-md-4" data-aos="fade-down" data-aos-delay="150">
          <div class="portfolio-item image-zoom">
            <div class="image-zoom-wrapper">
              <img src="./assets/images/por1.svg" alt="" />
            </div>
            <a href="./assets/images/por1.svg" data-fancybox="gallery" class="iconbox"><i class="ri-search-2-line"></i></a>
          </div>
          <div class="portfolio-item image-zoom mt-5">
            <div class="image-zoom-wrapper">
              <img src="./assets/images/por2.svg" alt="" />
            </div>
            <a href="./assets/images/por2.svg" data-fancybox="gallery" class="iconbox"><i class="ri-search-2-line"></i></a>
          </div>
        </div>
        <div class="col-md-4" data-aos="fade-down" data-aos-delay="250">
          <div class="portfolio-item image-zoom">
            <div class="image-zoom-wrapper">
              <img src="./assets/images/por3.svg" alt="" />
            </div>
            <a href="./assets/images/por3.svg" data-fancybox="gallery" class="iconbox"><i class="ri-search-2-line"></i></a>
          </div>
          <div class="portfolio-item image-zoom mt-5">
            <div class="image-zoom-wrapper">
              <img src="./assets/images/por4.svg" alt="" />
            </div>
            <a href="./assets/images/por4.svg" data-fancybox="gallery" class="iconbox"><i class="ri-search-2-line"></i></a>
          </div>
        </div>
        <div class="col-md-4" data-aos="fade-down" data-aos-delay="350">
          <div class="portfolio-item image-zoom">
            <div class="image-zoom-wrapper">
              <img src="./assets/images/por5.svg" alt="" width="400px" />
            </div>
            <a href="./assets/images/por5.svg" data-fancybox="gallery" class="iconbox"><i class="ri-search-2-line"></i></a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- TEAM -->
  <section id="team" class="section">
    <div class="container">
      <div class="row">
        <div class="col-12 text-center" data-aos="fade-down" data-aos-delay="150">
          <div class="section-title">
            <h1 class="display-4 fw-semibold">Pengurus Kami</h1>
            <div class="line"></div>
            <p>Kami adalah pengurus usaha ini dan kami adalah pencetus kebaikan antar sesama</p>
          </div>
        </div>
      </div>
      <div class="py-5 team4" data-aos="fade-down" data-aos-delay="150">
        <div class="container">
          <div class="row justify-content-center mb-4">
            <div class="row">
              <div class="col mb-1">
                <div class="row">
                  <div class="col-md-12">
                    <img src="assets/images/picpro1.png" alt="wrapkit" class="img-fluid rounded-circle" />
                  </div>
                  <div class="col-md-12 text-center">
                    <div class="pt-2">
                      <h5 class="mt-4 font-weight-medium mb-0">H.Bambang Ikwan Hidayat</h5>
                      <br>
                      <p>Ketua P4S Purileisa</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col mb-1">
                <div class="row">
                  <div class="col-md-12">
                    <img src="assets/images/picpro2.png" alt="wrapkit" class="img-fluid rounded-circle" />
                  </div>
                  <div class="col-md-12 text-center">
                    <div class="pt-2">
                      <h5 class="mt-4 font-weight-medium mb-0">Hj. Ekawati Yulsilviana</h5>
                      <br>
                      <br>
                      <p>Sekertaris P4S Purileisa</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col mb-1">
                <div class="row">
                  <div class="col-md-12">
                    <img src="assets/images/picpro3.png" alt="wrapkit" class="img-fluid rounded-circle" />
                  </div>
                  <div class="col-md-12 text-center">
                    <div class="pt-2">
                      <h5 class="mt-4 font-weight-medium mb-0">Revivali Muhammad Ulisse A</h5>
                      <br>
                      <p>Divisi Produksi P4S Purileisa</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col mb-1">
                <div class="row">
                  <div class="col-md-12">
                    <img src="assets/images/picpro4.png" alt="wrapkit" class="img-fluid rounded-circle" />
                  </div>
                  <div class="col-md-12 text-center">
                    <div class="pt-2">
                      <h5 class="mt-4 font-weight-medium mb-0">Delvina Agustin</h5>
                      <br>
                      <br>
                      <p>Divisi HUMAS P4S Purileisa</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col mb-1">
                <div class="row">
                  <div class="col-md-12">
                    <img src="assets/images/picpro5.png" alt="wrapkit" class="img-fluid rounded-circle" />
                  </div>
                  <div class="col-md-12 text-center">
                    <div class="pt-2">
                      <h5 class="mt-4 font-weight-medium mb-0">Luthfianissa Auroraning Nagari</h5>
                      <br>
                      <p>Bendahara P4S Purileisa</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
  </section>


  <!-- FOOTER -->
  <footer class="bg-dark">
    <div class="footer-top">
      <div class="container">
        <div class="row gy-5">
          <div class="col-lg-4 col-sm-6">
            <div class="foot-img">
              <a href="#"><img src="./assets/images/image 1.svg" alt="" /></a>
            </div>
          </div>
          <div class="col-lg-4 col-sm-6">
            <h5 class="mb-0 text-white">Social Media</h5>
            <div class="line"></div>
            <div class="social-icons">
              <ul>
                <li><a href="https://www.facebook.com/profile.php?id=100076449134865"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                      <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
                    </svg></i></a>facebook</li>
                <li><a href="https://www.instagram.com/p4s_purileisa/"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                      <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z" />
                    </svg></i></a>Instagram</li>
                <li><a href="https://www.tiktok.com/@purileisa?is_from_webapp=1&sender_device=pc"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-tiktok" viewBox="0 0 16 16">
                      <path d="M9 0h1.98c.144.715.54 1.617 1.235 2.512C12.895 3.389 13.797 4 15 4v2c-1.753 0-3.07-.814-4-1.829V11a5 5 0 1 1-5-5v2a3 3 0 1 0 3 3V0Z" />
                    </svg></a>Tiktok</li>
              </ul>
            </div>
          </div>
          <div class="col-lg-3 col-sm-6">
            <h5 class="mb-0 text-white">Kontak Kami</h5>
            <div class="line"></div>
            <ul>
              <li>Kalimantan Timur, Kota Samarinda</li>
              <li>(+62) 813-5200-8196</li>
              <li>P4SPurileisa@gmail.com</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js"></script>
  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script src="./assets/js/main.js"></script>
  <script async defer src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.2"></script>
  <script async src="//www.instagram.com/embed.js"></script>
</body>

</html>
<?php 
    include "koneksi.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Goat</title>
    <link rel="icon" href="img/logo.png" />
    <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"
  />
  <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
    rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
    crossorigin="anonymous"
  />
</head>
<body>
     <!-- nav start --> 
     <nav class="navbar navbar-expand-lg bg-body-tertiary sticky-top">
        <div class="container">
          <img src="https://i2-prod.mirror.co.uk/incoming/article27915149.ece/ALTERNATES/s1200c/1_GettyImages-1242949358.jpg" alt="logo" style="width: 40px; height: 40px; margin-right: 1px;">
          <a class="navbar-brand text-dark" href="#home"><b>The Goathony</b></a>
          <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0 text-dark">
              <li class="nav-item">
                <a class="nav-link" href="#hero">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#article">Article</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#gallery">Gallery</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#schedule">Schedule</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#aboutme">About Me</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="login.php" target="_blank">Login</a>
              </li>
              <li class="nav-item">
                <button id="darkButton" class="me-2">
                  <i class="nav-link bi bi-moon-stars"></i>
                </button>
              </li>
              <li class="nav-item">
                <button id="lightButton">
                  <i class="nav-link bi bi-brightness-high"></i>
                </button>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- nav end -->
      <!-- hero start -->
      <section
        id="hero"
        class="isi text-center p-5 bg-info-subtle text-sm-start text-dark"
      >
        <div class="container">
          <div class="d-sm-flex flex-sm-row-reverse align-items-center">
            <img src="https://i2-prod.mirror.co.uk/incoming/article27915149.ece/ALTERNATES/s1200c/1_GettyImages-1242949358.jpg" class="img-fluid" width="320" />
            <div>
              <h1 class="fw-bold dispaly-4">
                Antony Matheus dos Santos, dikenal dengan sebutan Antony, 
                adalah seorang pemain sepak bola profesional Brasil yang bermain 
                sebagai gelandang sayap untuk klub Liga Utama Inggris Manchester 
                United dan tim nasional Brasil.
              </h1>
              <h4 class="lead dispaly-6">
                Antony Matheus dos Santos atau sering disebut "Goathony" mempunyai rekor yang 
                sangat sulit dikalahkan dimana dia mendapatkan 10 kali Ballon D'or berturut-turut 
                dan tahun 2024 dia mencapai rekor 30 match 30 games!!! 
              </h4>
              <h6>
                <span id="tanggal"></span>
                <span id="jam"></span>
              </h6>
            </div>
          </div>
        </div>
      </section>
      <!-- hero end -->
      <!-- article begin -->
<section id="article" class="text-center p-5">
  <div class="container">
    <h1 class="fw-bold display-4 pb-3">article</h1>
    <div class="row row-cols-1 row-cols-md-3 g-4 justify-content-center">
      <?php
      $sql = "SELECT * FROM article ORDER BY tanggal DESC";
      $hasil = $conn->query($sql); 

      while($row = $hasil->fetch_assoc()){
      ?>
        <div class="col">
          <div class="card h-100">
            <img src="img/<?= $row["gambar"]?>" class="card-img-top" alt="..." />
            <div class="card-body">
              <h5 class="card-title"><?= $row["judul"]?></h5>
              <p class="card-text">
                <?= $row["isi"]?>
              </p>
            </div>
            <div class="card-footer">
              <small class="text-body-secondary">
                <?= $row["tanggal"]?>
              </small>
            </div>
          </div>
        </div>
        <?php
      }
      ?> 
    </div>
  </div>
</section>
<!-- article end -->
      <!-- gallery start -->
      <section
        id="gallery"
        class="isi text-center p-5 bg-info-subtle text-dark"
      >
        <div class="container">
          <h1 class="fw-bold dispaly-4 pb-3">Gallery</h1>
          <div id="carouselExample" class="carousel slide">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="https://i2-prod.mirror.co.uk/incoming/article27915149.ece/ALTERNATES/s1200c/1_GettyImages-1242949358.jpg" class="d-block w-100" alt="..." />
              </div>
              <div class="carousel-item">
                <img src="https://i2-prod.mirror.co.uk/incoming/article27915149.ece/ALTERNATES/s1200c/1_GettyImages-1242949358.jpg" class="d-block w-100" alt="..." />
              </div>
              <div class="carousel-item">
                <img src="https://i2-prod.mirror.co.uk/incoming/article27915149.ece/ALTERNATES/s1200c/1_GettyImages-1242949358.jpg" class="d-block w-100" alt="..." />
              </div>
              <div class="carousel-item">
                <img src="https://i2-prod.mirror.co.uk/incoming/article27915149.ece/ALTERNATES/s1200c/1_GettyImages-1242949358.jpg" class="d-block w-100" alt="..." />
              </div>
              <div class="carousel-item">
                <img src="https://i2-prod.mirror.co.uk/incoming/article27915149.ece/ALTERNATES/s1200c/1_GettyImages-1242949358.jpg" class="d-block w-100" alt="..." />
              </div>
            </div>
            <button
              class="carousel-control-prev"
              type="button"
              data-bs-target="#carouselExample"
              data-bs-slide="prev"
            >
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button
              class="carousel-control-next"
              type="button"
              data-bs-target="#carouselExample"
              data-bs-slide="next"
            >
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
        </div>
      </section>
      <!-- gallery end -->

       <!-- Schedule start -->
      <section id="schedule" class="text-center p-5">
        <div class="container">
          <h1 class="fw-bold dispaly-4 pb-3">Schedule</h1>
          <div class="row row-cols-1 row-cols-md-4 g-4 justify-content-end">
            <div class="col">
              <div class="card h-100">
                
                
                <div class="card-body">
                  <h5 class="card-header bg-danger">Senin</h5>
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item">Rekayasa Perangkat Lunak 12.30-15.00 | H.4.8</li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card h-100">
                
                <div class="card-body">
                  <h5 class="card-header bg-danger">Selasa</h5>
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item">Technopreunersip 10.30-12.00 | Kulino</li>
                    <li class="list-group-item">Basis Data Teori 12.30-14.10 | H.5.13</li>
                    <li class="list-group-item">Pendidikan Kewarganegaraan 18.30-20.00 | H.7</li>
                  </ul>
                </div>
                
              </div>
            </div>
            <div class="col">
              <div class="card h-100">
                
                <div class="card-body">
                  <h5 class="card-header bg-danger">Rabu</h5>
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item">Pemrograman Berbasis Data 10.20-12.00 | D.2.J</li>
                    <li class="list-group-item">Basis Data 12.30-14.10 | D.3.I</li>
                    <li class="list-group-item">Probstat 15.30-18.00 | H.4.11</li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card h-100">
                
                <div class="card-body">
                  <h5 class="card-header bg-danger">Kamis</h5>
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item">Logika Informatika 09.30-15.00 | H.4.1</li>
                    <li class="list-group-item">Sistem Operasi 12.30-15.00 | H.4.11</li>
                    
                  </ul>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card h-100">
                
                <div class="card-body">
                  <h5 class="card-header bg-danger">Jumat</h5>
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item">Free</li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card h-100">
                
                <div class="card-body">
                  <h5 class="card-header bg-danger">Sabtu</h5>
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item">Free</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Schedule end -->

      <!-- About Me start -->
      <section
        id="aboutme"
        class="isi text-center p-5 bg-info-subtle text-sm-start text-dark">
        <div class="container">
          <h1 class="fw-bold dispaly-4 pb-3 text-center">About Me</h1>
          <div class="d-sm-flex flex-sm-row- align-items-center">
            <img src="https://i2-prod.mirror.co.uk/incoming/article27915149.ece/ALTERNATES/s1200c/1_GettyImages-1242949358.jpg" class="img-fluid - rounded-circle me-3" width="320" />
            <div>
              <h4 class="lead dispaly-6">
                A11.2023.15290 
              </h4>
              <h1 class="fw-bold dispaly-4">
                Muhammad Falah Altairgunna
              </h1>
              <h4 class=" lead dispaly-6">
               Program studi Tenik Informatika  
              </h4>
              <h4>Universitas Dian Nuswantoro</h4>
            </div>
          </div>
        </div>
      </section>

      <!-- footer start -->
      <footer class="text-center p-5">
        <div>
          <a href="#"
            ><i class="bi bi-instagram h2 p-2 text-dark"></i
          ></a>
          <a href="#"
            ><i class="bi bi-twitter-x h2 p-2 text-dark"></i
          ></a>
          <a href="#"
            ><i class="bi bi-whatsapp h2 p-2 text-dark"></i
          ></a>
        </div>
        <div>Muhamma Falah Altairgunna&copy; 2024</div>
      </footer>
      <!-- footer end -->
  
      <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"
      ></script>

      <script>
        function aktifkanModeGelap() {
    // Set kelas untuk body
    document.body.classList.remove("bg-body-tertiary");
    document.body.classList.add("bg-secondary");
  
    // Set kelas untuk elemen-elemen dengan kelas "isi"
    const elemenIsi = document.getElementsByClassName("isi");
    for (let i = 0; i < elemenIsi.length; i++) {
      elemenIsi[i].classList.remove("bg-info-subtle", "text-dark");
      elemenIsi[i].classList.add("bg-black", "text-white");
    }
  
    // Set kelas untuk elemen card-body
    const cardBodies = document.querySelectorAll(".card-body");
    cardBodies.forEach((cardBody) => {
      cardBody.classList.remove("bg-info-subtle", "text-dark");
      cardBody.classList.add("bg-dark", "text-white");
    });
  }
  
  // Fungsi untuk mengaktifkan mode terang
  function aktifkanModeTerang() {
    // Set kelas untuk body
    document.body.classList.remove("bg-secondary");
    document.body.classList.add("bg-body-tertiary");
  
    // Set kelas untuk elemen-elemen dengan kelas "isi"
    const elemenIsi = document.getElementsByClassName("isi");
    for (let i = 0; i < elemenIsi.length; i++) {
      elemenIsi[i].classList.remove("bg-dark", "text-white");
      elemenIsi[i].classList.add("bg-info-subtle", "text-dark");
    }
  
    // Set kelas untuk elemen card-body
    const cardBodies = document.querySelectorAll(".card-body");
    cardBodies.forEach((cardBody) => {
      cardBody.classList.remove("bg-dark", "text-white");
      cardBody.classList.add("bg-light", "text-dark");
    });
  }
  
  // Fungsi untuk menampilkan jam dan tanggal
  function tampilWaktu() {
    var waktu = new Date();
    var bulan = waktu.getMonth() + 1; // Menambahkan 1 karena bulan mulai dari 0
  
    // Menampilkan tanggal dan jam
    document.getElementById("tanggal").innerHTML =
      waktu.getDate() + "/" + bulan + "/" + waktu.getFullYear(); // Perbaiki sintaksis
    document.getElementById("jam").innerHTML =
      waktu.getHours() +
      ":" +
      String(waktu.getMinutes()).padStart(2, "0") + // Menambahkan nol di depan jika kurang dari 10
      ":" +
      String(waktu.getSeconds()).padStart(2, "0"); // Menambahkan nol di depan jika kurang dari 10
  
    // Set timeout untuk memanggil fungsi ini setiap detik
    setTimeout(tampilWaktu, 1000);
  }
  
  // Tetapkan event listener untuk tombol dark mode dan light mode
  window.onload = function () {
    document.getElementById("darkButton").onclick = aktifkanModeGelap;
    document.getElementById("lightButton").onclick = aktifkanModeTerang;
    tampilWaktu(); // Panggil fungsi tampilWaktu saat halaman dimuat
  };
      </script>
</body>
</html>

 
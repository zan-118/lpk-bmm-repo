<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta
      name="description"
      content="Lembaga Pelatihan Bahasa Jepang Bina Muda Mandiri"
    />
    <title>LPK Bina Muda Mandiri</title>
    <!-- Bootstrap CSS -->
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <!-- CSS Kustom -->
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css" />
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap"
      rel="stylesheet"
    />
    <link rel="icon" href="https://lpkbinamudamandiri.com/wp-content/uploads/2023/11/favicon-32x32-1.png" type="image/x-icon" />
    <!-- Icon -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
    />
</head>
<body>
<header class="sticky-top bg-light">
      <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light">
          <div class="container">
            <a class="navbar-brand" href="#"
              ><img
                src="https://lpkbinamudamandiri.com/wp-content/uploads/2023/11/logo-lpk-bmm-hijau.png"
                alt="logo lpk bina muda mandiri"
            /></a>
            <button
              class="navbar-toggler"
              type="button"
              data-bs-toggle="collapse"
              data-bs-target="#navbarNav"
              aria-controls="navbarNav"
              aria-expanded="false"
              aria-label="Toggle navigation"
            >
              <span class="navbar-toggler-icon"></span>
            </button>
            <div
              class="collapse navbar-collapse justify-content-end"
              id="navbarNav"
            >
              <ul class="navbar-nav fw-bold">
                <li class="nav-item">
                  <a class="nav-link" href="#home"
                    ><i class="fas fa-home"></i> Home</a
                  >
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#about"
                    ><i class="fas fa-info-circle"></i> Tentang Kami</a
                  >
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#courses"
                    ><i class="fas fa-book"></i> Program</a
                  >
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#gallery"><i class="fas fa-images"></i> Galeri</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#contact"
                    ><i class="fas fa-envelope"></i> Hubungi Kami</a
                  >
                </li>
              </ul>
            </div>
          </div>
        </nav>
      </div>
    </header>

    <!-- Modal Selamat Datang -->
    <div
      class="modal fade"
      id="welcomeModal"
      tabindex="-1"
      aria-labelledby="welcomeModalLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="welcomeModalLabel">Selamat Datang!</h5>
            <button
              type="button"
              class="btn-close"
              data-bs-dismiss="modal"
              aria-label="Close"
            ></button>
          </div>
          <div class="modal-body text-center">
            <img src="https://lpkbinamudamandiri.com/wp-content/uploads/2023/11/banner.jpg" class="img-fluid" alt="Welcome Image" />
          </div>
        </div>
      </div>
    </div>

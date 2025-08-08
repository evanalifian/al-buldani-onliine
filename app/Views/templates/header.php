<!DOCTYPE html>
<html lang="en" data-bs-theme="auto">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Astro v5.9.2">
  <title><?= $model['title'] ?></title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
  <link rel="apple-touch-icon" href="/docs/5.3/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
  <link rel="icon" href="/docs/5.3/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
  <link rel="icon" href="/docs/5.3/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
  <link rel="manifest" href="/docs/5.3/assets/img/favicons/manifest.json">
  <link rel="mask-icon" href="/docs/5.3/assets/img/favicons/safari-pinned-tab.svg" color="#712cf9">
  <link rel="icon" href="/docs/5.3/assets/img/favicons/favicon.ico">
  <meta name="theme-color" content="#712cf9">
  <link href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900&display=swap" rel="stylesheet">
  <link href="blog.css" rel="stylesheet">
  <style>
    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      user-select: none
    }

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem
      }
    }

    .b-example-divider {
      width: 100%;
      height: 3rem;
      background-color: #0000001a;
      border: solid rgba(0, 0, 0, .15);
      border-width: 1px 0;
      box-shadow: inset 0 .5em 1.5em #0000001a, inset 0 .125em .5em #00000026
    }

    .b-example-vr {
      flex-shrink: 0;
      width: 1.5rem;
      height: 100vh
    }

    .bi {
      vertical-align: -.125em;
      fill: currentColor
    }

    .nav-scroller {
      position: relative;
      z-index: 2;
      height: 2.75rem;
      overflow-y: hidden
    }

    .nav-scroller .nav {
      display: flex;
      flex-wrap: nowrap;
      padding-bottom: 1rem;
      margin-top: -1px;
      overflow-x: auto;
      text-align: center;
      white-space: nowrap;
      -webkit-overflow-scrolling: touch
    }

    .btn-bd-primary {
      --bd-violet-bg: #712cf9;
      --bd-violet-rgb: 112.520718, 44.062154, 249.437846;
      --bs-btn-font-weight: 600;
      --bs-btn-color: var(--bs-white);
      --bs-btn-bg: var(--bd-violet-bg);
      --bs-btn-border-color: var(--bd-violet-bg);
      --bs-btn-hover-color: var(--bs-white);
      --bs-btn-hover-bg: #6528e0;
      --bs-btn-hover-border-color: #6528e0;
      --bs-btn-focus-shadow-rgb: var(--bd-violet-rgb);
      --bs-btn-active-color: var(--bs-btn-hover-color);
      --bs-btn-active-bg: #5a23c8;
      --bs-btn-active-border-color: #5a23c8
    }
  </style>
</head>

<body>
  <div class="fixed-top bg-body-tertiary">
    <header class="py-3 bg-success">
      <div class="container">
        <div class="row flex-nowrap justify-content-between align-items-center">
          <div class="col-4 pt-1">
            <a class="link-light text-decoration-none" href="#">Subscribe</a>
          </div>
          <div class="col-4 text-center">
            <a class="link-light text-decoration-none" href="#">
              <?= $model['title'] ?>
            </a>
          </div>
          <div class="col-4 d-flex justify-content-end align-items-center">
            <a class="link-light text-decoration-none" href="#" aria-label="Search">
              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor"
                stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="mx-3" role="img"
                viewBox="0 0 24 24">
                <title>Search</title>
                <circle cx="10.5" cy="10.5" r="7.5"></circle>
                <path d="M21 21l-5.2-5.2"></path>
              </svg>
            </a>
            <a class="btn btn-sm btn-outline-secondary" href="#">Sign up</a>
          </div>
        </div>
      </div>
    </header>
    <div class="nav-scroller py-1 mb-3 border-bottom">
      <div class="container">
        <nav class="nav nav-underline justify-content-between">
          <a class="nav-item nav-link link-body-emphasis active" href="#">Home</a>
          <a class="nav-item nav-link link-body-emphasis" href="#">Profil</a>
          <a class="nav-item nav-link link-body-emphasis" href="#">Lembaga Pendidikan</a>
          <a class="nav-item nav-link link-body-emphasis" href="#">Blogs</a>
          <a class="nav-item nav-link link-body-emphasis" href="#">Gallery</a>
          <a class="nav-item nav-link link-body-emphasis" href="#">Galeri</a>
          <a class="nav-item nav-link link-body-emphasis" href="#">Hubungi Kami</a>
          <a class="nav-item nav-link link-body-emphasis" href="#">Pendaftaran</a>
        </nav>
      </div>
    </div>
  </div>
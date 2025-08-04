<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
  </head>
  <title><?= $model["title"] ?></title>
</head>
<body>
  <div style="min-height: 100vh;" class="d-flex flex-column">
    <nav class="navbar navbar-expand-lg bg-body-tertiary border-bottom fixed-top">
      <div class="container">
        <a class="navbar-brand fw-bold" href="#">LOGO</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse ms-4" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item px-1">
            <a class="nav-link" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item px-1">
            <a class="nav-link" aria-current="page" href="#">Profi</a>
          </li>
          <li class="nav-item px-1">
            <a class="nav-link" aria-current="page" href="#">Lembaga Pendidikan</a>
          </li>
          <li class="nav-item px-1">
            <a class="nav-link" aria-current="page" href="#">Blog</a>
          </li>
          <li class="nav-item px-1">
            <a class="nav-link" aria-current="page" href="#">Galeri</a>
          </li>
          <li class="nav-item px-1">
            <a class="nav-link" aria-current="page" href="#">Kontak</a>
          </li>
        </ul>
        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"/>
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>
  <div style="padding-top: 96px;" class="container">
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="css.css" />
</head>
  <body>
    <nav class="navbar navbar-dark bg-primary fixed-top">
        <div class="container">
          <a class="navbar-brand ms-3"><span1>PBW</span1><span>Selamat Datang, Fairuz Abdullah</span></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
            <div class="offcanvas-header">
              <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">Praktikum PBW A</h5>
              <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
              <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="home.php">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="UTS.php">Daftar Mahasiswa</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Informasi Tugas</a>
                  </li>
              </ul>
              <form class="d-flex mt-3" role="search">
                <button class="btn btn-success fixed-bottom position-absolute bottom n-0 navbar-dark bg-danger"><a href="login.php"> Logout</a></button>
              </form>
            </div>
          </div>
        </div>
      </nav>

      <!-- jumbotron -->
      <div class="jumbotron">
<div class="p-5 mb-4 bg-body-tertiary rounded-3">
  <div class="container-fluid py-5 text-center">
    <h1 class="display-5 fw-bold">WEBSITE PRAKTIKUM</h1>
    <h1 class="display-5 fw-bold">PEMOGRAMAN BERBASIS WEB</h1>
  </div>

    <!-- card -->
    <div class=" mt-5">
    <div class="row">
      <div class="col-sm-4">
        <div class="card">
          <div class="card-body">
            <img src="Screenshot (109).png" class="card-img-top">
            <h5 class="card-title mt-1 mb-0">Fairuz Abdullah</h5>
            <p class="gray mt-0">220441100070-Praktikan<p>
            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
            <p>have no breakpoint abbreviation in them. This is because those classes are applied from</p>
          </div>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="card">
          <div class="card-body">
            <img src="Screenshot (109).png"class="card-img-top">
            <h5 class="card-title mt-1 mb-0">Fairuz Abdullah</h5>
            <p class="gray mt-0">220441100070-Praktikan<p>
            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
            <p>have no breakpoint abbreviation in them. This is because those classes are applied from</p>
          </div>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="card">
          <div class="card-body">
            <img src="Screenshot (109).png" class="card-img-top">
            <h5 class="card-title mt-1 mb-0">Fairuz Abdullah</h5>
            <p class="gray mt-0">220441100070-Praktikan<p>
            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
            <p>have no breakpoint abbreviation in them. This is because those classes are applied from</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>

      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>
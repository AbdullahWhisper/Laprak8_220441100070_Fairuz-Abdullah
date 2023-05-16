<?php
include("config.php");
$query = "SELECT * FROM pengguna";
$result = mysqli_query($conn, $query);
$no = 1;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="UTS.css">

    <title>Tugas UTS</title>
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
      <h1 style="text-align: center; color: rgb(54, 51, 51); padding-top: 140px;"><b>Informasi</b></h1>
      <h1 style="text-align: center; color: rgb(54, 51, 51);"><b>Pengguna E-Commerce</b></h1>
      <br>
      <div class="card" style="width: 96%; height: auto; left: 2%; right: 2%; border-radius: 10px; box-shadow: 0px 3px 20px rgba(0,0,0,0.3)">
        <div class="card-body">
          <div class="d-flex justify-content-between" >
            <a class="btn btn-primary" type="submit" href="tambah.php" style="margin-bottom: 15px; margin-right: 1%; background-color: #72FF70; width: 50%;">Tambah Data</a>
            <button class="btn btn-primary" type="submit" style="margin-bottom: 15px; background-color: #FF4343; width: 50%;">Cetak Laporan <img src="laporan.png" alt="" width="15%"></button>
            <div class="input-group mb-3" style="margin-left: 50%;">
              <input type="text" class="form-control" placeholder="Cari mahasiswa berdasarkan NIM" aria-label="Recipient's username" aria-describedby="basic-addon2" >
              <div class="input-group-append">
                <button class="btn btn-outline-secondary" type="button" style="background-color: #98CDFE;" > <img src="search.png" alt="" style="width: 2vw; height: auto;"></button>
              </div>
            </div>
          </div>
          <br>
          <table class="table">
            <thead style="background-color:#98CDFE;
            ;">
              <tr>
                <td>NO</td>
                <td>NIM</td>
                <td>NAMA</td>
                <td>DOSEN</td>
                <td>STATUS</td>
                <td>KETERANGAN</td>
                <td>AKSI</td>
              </tr>
            </thead>
            <tbody>
              <?php
              if ($result) {
                if (mysqli_num_rows($result) > 0) {

                  while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>".$no++."</td>";
                echo "<td>".$row['NIM']."</td>";
                echo "<td>".$row['NAMA']."</td>";
                echo "<td>".$row['DOSEN']."</td>";
                echo "<td>".$row['STATUS']."</td>";
                echo "<td>".$row['KETERANGAN']."</td>";
                echo "<td>";
                echo "<a href='edit.php?id=".$row['Nomor']."' class='btn btn-primary' style='background-color: #87A9FF;'>EDIT</a> ";
                echo "<a href='hapus.php?id=".$row['Nomor']."' class='btn btn-primary' style='background-color: #FF5E5E;'>HAPUS</a>";
                echo "</td>";
                echo "</tr>";
             } } else {
                  echo "Tidak ada pengguna yang ditemukan.";
                  }
               } else {
                  echo "Terjadi kesalahan dalam menjalankan query.";
              }
              
              // Menutup koneksi
              mysqli_close($conn);
      ?>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
    crossorigin="anonymous"
  ></script>
</body>
</html>
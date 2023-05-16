<?php
include("config.php");

if(isset($_POST['submit'])) {
    $NIM = $_POST['nim'];
    $NAMA = $_POST['nama'];
    $DOSEN = $_POST['dosen'];
    $STATUS = $_POST['status'];
    $KETERANGAN = $_POST['keterangan'];
    $query = "INSERT INTO pengguna (Nomor, NIM, NAMA, DOSEN, STATUS, KETERANGAN) VALUES ('', '$NIM', '$NAMA', '$DOSEN', '$STATUS', '$KETERANGAN')";
    $result = mysqli_query($conn, $query);
    
    if ($result) {
      echo "<script> alert('data berhasih di input');
      document.location.href='UTS.php';
      </script>";
        exit;
    } else {
      echo "<script> alert('Username atau Password salah');
      document.location.href='tambah.php';
      </script>";
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=
  , initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="tambah.css" />
</head>
<body>
  <div class="wrapper">
  <form method="post" action="">

  <input type="hidden" name="id" value=""><br><br>
  <label for="nim">NIM  :</label>
  <input type="text" id="nim" name="nim" value=""><br><br>
  <label for="nama">Nama:</label>
  <input type="text" id="nama" name="nama" value=""><br><br>
  <label for="dosen">Dosen:</label>
  <input type="text" id="dosen" name="dosen" value=""><br><br>
  <label for="status">Status:</label>
  <input type="text" id="status" name="status" value=""><br><br>
  <label for="keterangan">Keterangan:</label>
  <input type="text" id="keterangan" name="keterangan" value=""><br><br>
  <div class="button">
  <input type="submit" name="submit" value="submit">
  </div>
</form>
</div>
</body>
</html>



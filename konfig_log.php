<?php 
include 'config.php';
$us = $_POST['username'];
$pass = $_POST['password'];

$login = mysqli_query($conn, "SELECT * FROM user WHERE username = '$us' or pass= '$pass'");
$cek = mysqli_num_rows($login);

if($cek > 0){
    session_start();
    $_SESSION['username'] = $username;
    $_SESSION['status'] = "login";
    header("location:home.php");
// }else{
//     echo "
//     <script>
//     alert('gagal');
//     document.location.href = 'login.php';
//     </script>
//     ";

}

?>
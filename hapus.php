<?php
$id = $_GET['id'];
include 'config.php';

mysqli_query($conn, "DELETE FROM pengguna WHERE Nomor = '$id'");
header("Location: UTS.php");

// include "config.php";

// if (isset($_GET['id'])) {
//     $id = $_GET['id'];
//     try {
//         $query = "DELETE FROM pengguna WHERE Nomor=?";
//         $stmt = mysqli_prepare($conn, $query);
//         mysqli_stmt_bind_param($stmt, "i", $id);
//         mysqli_stmt_execute($stmt);
        
//         if (mysqli_stmt_affected_rows($stmt) > 0) {
//             header("Location: UTS.php");
//             exit;
//         } else {
//             echo "Data tidak ditemukan.";
//         }
//     } catch (Exception $e) {
//         echo "Terjadi kesalahan: " . $e->getMessage();
//     }
// } else {
//     header("Location: UTS.php");
//     exit;
// }

// mysqli_close($conn);
?>

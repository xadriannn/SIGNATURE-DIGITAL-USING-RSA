<?php
// Mendapatkan data nama panitia dari metode POST
$namaPanitia = $_POST['nama'];
include "koneksi.php";
// Menyimpan data nama panitia ke database
$query = "INSERT INTO pengesah (nama_pengesah) VALUES ('$namaPanitia')";

if (mysqli_query($conn, $query)) {
    // Jika penyimpanan berhasil, alihkan halaman ke halaman tujuan
    header("Location: signature.php");
    exit();
} else {
    // Jika terjadi kesalahan saat penyimpanan, tampilkan pesan error
    echo "Terjadi kesalahan: ";
}
?>

<?php
$host = 'localhost';  // Ganti sesuai dengan host database Anda
$user = 'root';  // Ganti sesuai dengan username database Anda
$pass = '';  // Ganti sesuai dengan password database Anda
$db = 'ki';  // Ganti sesuai dengan nama database Anda

$conn = new mysqli($host, $user, $pass, $db);

if (isset($_POST['qrcode'])) {
    $ciphertext = $_POST['qrcode'];
    $sql = mysqli_query($conn, "SELECT * FROM data_sertifikat WHERE ciphertext='$ciphertext'");
    $data = mysqli_fetch_array($sql);
    if ($data) {
        echo json_encode($data);
    } else {
        echo 1;
    }
}

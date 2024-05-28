<?php
// Fungsi untuk mengenkripsi pesan menggunakan RSA
function encryptRSA($message, $publicKey)
{
    openssl_public_encrypt($message, $ciphertext, $publicKey);
    return base64_encode($ciphertext);
}

// Mengambil data dari form
$nomorSertifikat = $_POST['nomorSertifikat'];
$namaPeserta = $_POST['namaPeserta'];
$jenisPelatihan = $_POST['jenisPelatihan'];
$pejabatPengesah = $_POST['pejabatPengesah'];
$tanggalDiterbitkan = $_POST['tanggalDiterbitkan'];

// Menggabungkan data menjadi satu string
$data = $nomorSertifikat . $namaPeserta . $jenisPelatihan . $pejabatPengesah . $tanggalDiterbitkan;

// Menghasilkan hash menggunakan fungsi SHA-3 (SHA3-256)
$hash = hash('sha3-256', $data);

// Simpan public key RSA dalam variabel (gunakan public key Anda sendiri)
$publicKey = "-----BEGIN PUBLIC KEY-----
MIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQCsfhzCYATbyl+hnUWj/nUuGR2V
hI/tbueIfnOprDND+OPQdKQOzUkAIdFmpKb2l5M+m83K2Zv3GjKMZIy5qWAKxHNU
lBseLeRBkjyNtoP2TW5/KjthP8Cav39/XlC0O1fYJROhS0UAsXTx/xsKYWZ+e0gI
4ZTThhtoPYKRMz8/CQIDAQAB
-----END PUBLIC KEY-----";

// Enkripsi message digest menggunakan RSA
$ciphertext = encryptRSA($hash, $publicKey);

// Mengimpor pustaka PHP QR Code Generator
require 'phpqrcode/phpqrcode.php';  // Ganti dengan path yang sesuai ke pustaka QR Code

// Fungsi untuk menghasilkan QR Code dari data
function generateQRCode($data, $filename)
{
    // Konfigurasi QR Code
    $ecc = QR_ECLEVEL_H;  // Level error correction (H = High)

    // Menghasilkan QR Code
    QRcode::png($data, $filename, $ecc, 10, 2);
}

// Nama file untuk menyimpan QR Code
$filename = "qrcode_".uniqid().".png";

// Memanggil fungsi untuk menghasilkan QR Code
generateQRCode($ciphertext, $filename);

//Menghubungkan ke database
$host = 'localhost';  // Ganti sesuai dengan host database Anda
$user = 'root';  // Ganti sesuai dengan username database Anda
$pass = '';  // Ganti sesuai dengan password database Anda
$db = 'ki';  // Ganti sesuai dengan nama database Anda

$conn = new mysqli($host, $user, $pass, $db);

// Memeriksa koneksi database
if ($conn->connect_error) {
    die("Koneksi database gagal: " . $conn->connect_error);
}

// Menyimpan data ke database
$sql = "INSERT INTO data_sertifikat (no_sertifikat, nama_peserta, jenis_pelatihan, pengesah, tanggal, ciphertext,qrcode)
        VALUES ('$nomorSertifikat', '$namaPeserta', '$jenisPelatihan', '$pejabatPengesah', '$tanggalDiterbitkan','$ciphertext','$filename')";

if ($conn->query($sql) === TRUE) {
    header("Location: data.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Menutup koneksi database
$conn->close();
?>



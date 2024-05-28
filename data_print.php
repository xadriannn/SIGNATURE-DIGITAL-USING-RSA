<?php

if (isset($_GET['id'])) {
    $id = $_GET['id'];
}

// Include autoloader
require_once 'assets/dompdf/autoload.inc.php';
// Reference the Dompdf namespace
use Dompdf\Dompdf;
// Instantiate and use the dompdf class
//ambil data dari tabel
// Koneksi Kedatabase
        $koneksi = mysqli_connect('localhost', 'root', '', 'ki');
        $no = 1;
        // Mengambil data dari database
        $get_data = mysqli_query($koneksi, "SELECT data_sertifikat.no_sertifikat,data_sertifikat.nama_peserta,data_sertifikat.jenis_pelatihan,
        data_sertifikat.pengesah, data_sertifikat.tanggal,data_sertifikat.qrcode,  pengesah.nama_pengesah
        FROM data_sertifikat
        INNER JOIN pengesah ON pengesah.id=data_sertifikat.pengesah WHERE data_sertifikat.id= '$id'");
        $data = mysqli_fetch_assoc($get_data);
        $formattedDate = date('d F Y', strtotime($data['tanggal']));

        
$dompdf = new Dompdf();
// Load content from html file
ob_start();
require 'print.php';
$html = ob_get_contents();
ob_get_clean();
$dompdf->loadHtml($html);

//(Optional) Setup the paper size and orientation
$dompdf->setPaper('A4', 'landscape');
//Render the HTML as PDF
$dompdf->render();
//Output the generated PDF (1 = download and 0 = preview)
$dompdf->stream('surat_tms.pdf', ['Attachment' => 0]);

?>
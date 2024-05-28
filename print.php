<!DOCTYPE html>
<html>
<head>
    <title>Certificate</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css">
    <style>
        .certificate {
            background-image: url('background.jpg');
            background-size: cover;
            background-position: center;
            width: 800px;
            height: 600px;
            margin: 0 auto;
            padding: 20px;
            text-align: center;
        }
        .certificate h2, .certificate h3, .certificate h4, .certificate h5 {
            color: #000000;
        }
        .certificate h2{
            padding-top: 30px;
        }
        .signature {
            max-width: 100px; /* Adjust the value to resize the signature image */
        }
        .ttd p {
    display: block;
    margin-block-end: 0px;
    margin-inline-start: 0px;
    margin-inline-end: 0px;
}
    </style>
</head>
<body>
    <div class="container my-5">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="certificate">
                    <h2 class="mt-4">VERIFIKASI PENDUDUK</h2>
                    <p>Atas Nama: </p>
                    <h3><strong><?php echo $data['nama_peserta'];  ?></strong></h3>
                    <p>SUDAH TERVERIFIKASI </p>
                    <h4><strong><?= $data['jenis_pelatihan']; ?></strong></h4>
                    <p>Waktu pencetakan : <strong><?php echo $formattedDate ?></strong></p>
                    <div class="ttd">
                    <p>Diverifikasi Oleh:</p>
                    <img src="<?php echo $data['qrcode']; ?>" class="signature" alt="Barcode"><br>
                    <h7><strong><?php echo $data['nama_pengesah'];?></strong></h7>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

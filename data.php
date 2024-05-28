
<html>
<head>
  <title>Form Data Sertifikat</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css">
</head>
<body>
  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

<?php
include 'header.php'; ?>
<div class="container-fluid mt-4 mb-4">
    <div>
        <h4 class="text-primary">Input Data Penduduk</h4>
    </div>
    <div class="row">
    <div class="col-md-6">
            <div class="card mt-3 mb-4">
                <div class="card-body">
                    <div class="row">
                    <div class="container">
                      <form action="upload.php" method="post">
                        <div class="mb-3">
                          <label for="nomorSertifikat" class="form-label">Nomor Sertifikat:</label>
                          <input type="text" class="form-control" id="nomorSertifikat" name="nomorSertifikat" required>
                        </div>
                        <div class="mb-3">
                          <label for="namaPeserta" class="form-label">Nama Penduduk:</label>
                          <input type="text" class="form-control" id="namaPeserta" name="namaPeserta" required>
                        </div>
                        <div class="mb-3">
                          <label for="jenisPelatihan" class="form-label">Alamat:</label>
                          <input type="text" class="form-control" id="jenisPelatihan" name="jenisPelatihan" required>
                        </div>
                        <div class="mb-3">
                            <div class="data_inputsign"></div>
                        </div>
                        <div class="mb-3">
                          <label for="tanggalDiterbitkan" class="form-label">Tanggal Diterbitkan:</label>
                          <input type="date" class="form-control" id="tanggalDiterbitkan" name="tanggalDiterbitkan" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                      </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
        <div class="col-md-6">
            <div class="card mt-3">
                <div class="card-header">
                    Data Sertifikat
                </div>
                <div class="tabel_class"></div>
            </div>
        </div>
</div>
<script>
$(document).ready(function() {
    $('.tabel_class').load('data_tabel.php');
    $('.data_inputsign').load('data_pengesah.php');
});
</script>
<?php include 'footer.php';
?>
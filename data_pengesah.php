<select id="panitia" name="pejabatPengesah" class="form-select mb-1" aria-label=".form-select example">
    <option selected>-- Pilih Pengesah --</option>
    <?php
    include 'koneksi.php';
    $data = mysqli_query($conn, 'SELECT * FROM pengesah');
    while ($data_array = mysqli_fetch_array($data)) {
    ?>
    <option value=" <?php echo $data_array['id'] ?> ">
        <?php echo $data_array['nama_pengesah'] ?></option>
    <?php
    }
    ?>
</select>
<table class="table table-bordered table-sm py-3 mt-4 mb-2 " id="table_id">
    <thead class="table-primary ">
        <tr>
            <td width="1%"></td>
            <td width="1%" class="justify-content-center">No</td>
            <td class="text-center">Nama</td>
            <td class="text-center" width="20%">Alamat</td>
            <td class="text-center">Pengesah</td>
            <td class="text-center">Tanggal</td>

        </tr>
    </thead>
    <tbody>
        <?php
        // Koneksi Kedatabase
        $koneksi = mysqli_connect('localhost', 'root', '', 'ki');
        $no = 1;
        // Mengambil data dari database
        $get_data = mysqli_query($koneksi, 'SELECT data_sertifikat.id, data_sertifikat.no_sertifikat,data_sertifikat.nama_peserta,data_sertifikat.jenis_pelatihan,
        data_sertifikat.pengesah, data_sertifikat.tanggal, pengesah.nama_pengesah
        FROM data_sertifikat
        INNER JOIN pengesah ON pengesah.id=data_sertifikat.pengesah;');

        // Mengubah data menjadi array
        while ($data = mysqli_fetch_assoc($get_data)) { ?>
        <tr>
            <td><a href="data_print.php?id=<?php echo $data['id']; ?>  
            " id="print_calon" target="_blank" class="btn btn-success btn-sm"><i class="bi bi-printer"></i></a></td>
            <td class="text-center"><?php echo $no++; ?>.</td>
            <td><?php echo $data['nama_peserta']; ?></td>
            <td><?php echo $data['jenis_pelatihan']; ?></td>
            <td><?php echo $data['nama_pengesah']; ?></td>
            <td><?php echo $data['tanggal']; ?></td>
        </tr>
        <?php }
        ?>
    </tbody>
</table>
<script type="text/javascript">
$(document).ready(function() {
    $("#table_id").DataTable();

});
</script>

<?php
include 'header.php'; 
include 'koneksi.php'; ?>
 <style>
        .delete-button {
            background-color: #3d251e;
            color: #fff;
            border: none;
            padding: 8px 16px;
            border-radius: 4px;
            font-size: 14px;
            font-weight: bold;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        .delete-button:hover {
            background-color: #c82333;
        }
    </style>
<!-- Add New Signature Modal Start -->
<div class="modal fade" tabindex="-1" id="addNewUserModal">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"><i class="bi bi-plus-square"></i> Signature</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="add-user-form" class="p-2" novalidate action="tambah_signature.php" method="post">
                    <div class="mb-3 input-group input-group-sm">
                        <input type="text" name="nama" class="form-control form-control-lg" placeholder="Nama Panitia"
                            required>
                        <div class="invalid-feedback">Pengesah harus diisi !</div>
                    </div>
                    <div class="mb-3 input-group input-group-sm">
                        <input type="submit" value="Add Signature" class="btn btn-primary btn-block btn-lg"
                            id="add-user-btn">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Add New Signature Modal End -->
<div class="container">
    <div class="row mt-4">
        <div class="col-lg-10 d-flex justify-content-between align-items-center">
            <div>
                <h4 class="text-primary">Membuat Signature Pengesah</h4>
            </div>
            <div>
                <button class="btn btn-primary d-flex" type="button" data-bs-toggle="modal"
                    data-bs-target="#addNewUserModal"><i class="bi bi-plus-square "
                        style="font-size: 1rem; color: white;"> </i>&nbsp;Signature</button>
            </div>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-lg-8">
            <div id="showAlert"></div>
        </div>
    </div>
    <div class="row">
        <center>
        <div class="col-lg-8">
            <div class="table-responsive">
                <table class="table table-striped table-bordered">
                    <thead>
                        <tr class="text-center">
                            <th>No.</th>
                            <th>Nama Pengesah</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
<?php 
$sql = "SELECT * FROM pengesah"; // Replace 'nama_tabel' with your actual table name
// Execute the query
$result = $conn->query($sql);
$no =1;
// Check if any rows were returned
if ($result->num_rows > 0) {
    // Loop through each row
    while ($row = $result->fetch_assoc()) {
        // Display the committee name
        echo "<tr class='text-center'>";
        echo "<td>". $no++;
        echo "<td>" . $row["nama_pengesah"] . "</td>";
        echo "<td><button class='delete-button' onclick='deletePanitia(" . $row["id"] . ")'>Hapus</button></td>";
        echo "</tr>";
    }
} else {
    echo "No committee members found.";
}
?>
                    </tbody>
                </table>
            </div>
        </div>
</center>
    </div>
</div>
<!DOCTYPE html>
<html>
<head>
    <title>Delete Button with Action</title>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        function deletePanitia(id) {
            Swal.fire({
                title: 'Konfirmasi',
                text: 'Apakah Anda yakin ingin menghapus data pengesah?',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Ya, Hapus',
                cancelButtonText: 'Batal'
            }).then((result) => {
                if (result.isConfirmed) {
                    // Panggil fungsi untuk menghapus data dari database
                    deleteDataPanitia(id);
                }
            });
        }

        function deleteDataPanitia(id) {
            const xhr = new XMLHttpRequest();
            xhr.open('POST', 'delete_panitia.php', true);
            xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
            xhr.onload = function() {
                if (this.status === 200) {
                    Swal.fire({
                        title: 'Berhasil',
                        text: 'Data pengesah telah dihapus.',
                        icon: 'success'
                    }).then(() => {
                        // Refresh halaman setelah menghapus data
                        location.reload();
                    });
                } else {
                    Swal.fire({
                        title: 'Gagal',
                        text: 'Terjadi kesalahan saat menghapus data pengesah.',
                        icon: 'error'
                    });
                }
            };
            xhr.onerror = function() {
                Swal.fire({
                    title: 'Gagal',
                    text: 'Terjadi kesalahan saat menghapus data pengesah.',
                    icon: 'error'
                });
            };
            xhr.send('id_panitia=' + id);
        }
    </script>
<?php include 'footer.php';
?>

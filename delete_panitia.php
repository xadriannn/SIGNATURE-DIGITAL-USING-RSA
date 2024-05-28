<?php 
include "koneksi.php";
if (isset($_POST['id_panitia'])) {
    $id_panitia = $_POST['id_panitia'];

    // SQL query to delete the panitia data
    $sql = "DELETE FROM pengesah WHERE id = $id_panitia"; // Replace 'nama_tabel' with your actual table name

    if ($conn->query($sql) === TRUE) {
        return true;
    } else {
        return false;
    }
} else {
    return false;
}

?>
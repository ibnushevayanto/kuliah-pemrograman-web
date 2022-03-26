<?php
require './koneksi.php';

if (isset($_GET['id_dosen'])) {
    $query = $koneksi->query("DELETE FROM dosen WHERE id_dosen = {$_GET['id_dosen']}");
    if ($query) {
        echo "<script>
            alert('Data Berhasil Dihapus'); 
            document.location.href = '../index.php'; 
        </script>";
    } else {
        echo "<script>
            alert('Data Gagal Dihapus'); 
            document.location.href = '../index.php'; 
        </script>";
    }
}

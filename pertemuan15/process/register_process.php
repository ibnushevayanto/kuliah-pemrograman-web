<?php
include './koneksi.php';
$koneksi->register($_POST['email'], $_POST['password'], $_POST['nama_lengkap'], $_POST['gender']);

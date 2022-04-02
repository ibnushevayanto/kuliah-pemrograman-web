<?php
include './koneksi.php';
$koneksi->login($_POST['email'], $_POST['password']);

<?php

require './koneksi.php';
$koneksi->hapus_product($_GET['id_product']);

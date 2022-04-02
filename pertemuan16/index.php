<?php 
require './fungsi.php';

$koneksi = openDb();
$query = myQuery($koneksi, "SELECT * FROM mahasiswa");
$fetch = myFetch($query);
var_dump($fetch);
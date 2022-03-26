<?php

// * Site : "localhost", "id18552887_ibnushevayanto", "P@ssw0rdibnushevayanto", "id18552887_db_kuliah_ibnushevayanto"
// * Lokal : "localhost", "root", "", "db_kuliah_ibnushevayanto"
$koneksi = new mysqli("localhost", "id18552887_ibnushevayanto", "P@ssw0rdibnushevayanto", "id18552887_db_kuliah_ibnushevayanto");

if ($koneksi->connect_errno) {
    echo "Failed to connect to MySQL: " . $koneksi->connect_error;
    exit();
}

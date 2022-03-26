<?php

function operasi($nilai1, $nilai2, $operator)
{
    switch ($operator) {
        case '+':
            return $nilai1 + $nilai2;
        case '-':
            return $nilai1 - $nilai2;
        case '*':
            return $nilai1 * $nilai2;
        case '/':
            return $nilai1 / $nilai2;
        default:
            return "Operasi Tidak Ditemukan";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
if (isset($_GET['angka_1']) && isset($_GET['angka_2']) && isset($_GET['operasi'])) {
    $angka1 = $_GET['angka_1'];
    $angka2 = $_GET['angka_2'];
    $operasi = $_GET['operasi'];
    $hasil = operasi($angka1, $angka2, $operasi);
    echo "
                <h1 style='margin-vertical: 20px;'>
                    Hasil: {$hasil}
                </h1>
            ";
} else {
    echo '
            <form action="">
                <div style="margin-top: 10px;">
                    Angka 1
                    <input name="angka_1" required type="number">
                </div>
                <div style="margin-top: 10px;">
                    Operasi
                    <select name="operasi" required>
                        <option value="">Pilih Operasi</option>
                        <option value="+">Penjumlahan</option>
                        <option value="-">Pengurangan</option>
                        <option value="*">Perkalian</option>
                        <option value="/">Pembagian</option>
                    </select>
                </div>
                <div style="margin-top: 10px;">
                    Angka 2
                    <input name="angka_2" required type="number">
                </div>
                <div style="margin-top: 10px;">
                    <button type="submit">Submit</button>
                </div>
            </form>
            ';
}
?>
</body>
</html>
<?php
$akhirTanggal = date("t", strtotime(date('Y-m-d')));

function isLibur($tanggal)
{
    $hari = date("N", strtotime($tanggal . "-" . date('n-Y')));
    return $hari === '6' || $hari === '7' ? 'bg-danger' : '';
}


function isHadirBgTabel($indexKolomAbsen, $data)
{
    return in_array($indexKolomAbsen, $data) ? 'bg-success' : '';
}

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="style.css" rel="stylesheet">
    <title>Tugas Bagian 2</title>
</head>

<body>
    <div style="padding: 20px;">
        <form action="" method="POST" enctype="multipart/form-data">
            Upload Data Kehadiran Mahasiswa (.txt)
            <input type="file" name="absen" required>
            <button type="submit">Submit</button>
        </form>
    </div>
    <div style="padding: 10px;">
        <table>
            <thead>
                <tr>
                    <th class="align-middle" rowspan="2">No.</th>
                    <th class="align-middle" rowspan="2">NIM</th>
                    <th class="align-middle" rowspan="2">Nama</th>
                    <th class="text-center" colspan="31"><?= date('M Y') ?> </th>
                    <th rowspan="2" class="text-center">Total Kehadiran</th>
                </tr>
                <tr>
                    <?php
                    for ($index = 1; $index <= $akhirTanggal; $index++) {
                        echo "<td class='". isLibur($index) ."'>{$index}</td>";
                    }
                    ?>
                </tr>
            </thead>
            <tbody>
                <?php
                if ($_FILES) {
                    $file = fopen($_FILES['absen']['tmp_name'], "r");
                    $no = 1;
                    while (!feof($file)) {
                        $dataFile = fgets($file);
                        $data = explode(",", $dataFile);
                        $nim = $data[0];
                        $nama = $data[1];
                        unset($data[0]);
                        unset($data[1]);
                        $kolomAbsen = "";
                        $jumlah = 0;
    
                        for ($indexKolomAbsen = 1; $indexKolomAbsen <= 31; $indexKolomAbsen++) {
                            if (in_array($indexKolomAbsen, $data)) {
                                $jumlah += 1;
                            }
    
                            $kolomAbsen .= "<td class='" . isHadirBgTabel($indexKolomAbsen, $data) . " " . isLibur($indexKolomAbsen) .
                                "'>" . (in_array($indexKolomAbsen, $data) ? 'H' : '') . "</td>";
                        }
    
                        echo "<tr>
                                      <td>{$no}</td>
                                      <td>{$nim}</td>
                                      <td>{$nama}</td>
                                      {$kolomAbsen}
                                      <td class='text-center'>{$jumlah}</td>
                                      </tr>";
                        $no++;
                    }
                    fclose($file);
                } else {
                    $jumlahKolom = $akhirTanggal + 4;
                    echo "<tr><td class='text-center' colspan='{$jumlahKolom}'>Silahkan Input Data Terlebih Dahulu</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</body>

</html>
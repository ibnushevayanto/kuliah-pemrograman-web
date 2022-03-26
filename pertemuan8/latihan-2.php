<html>

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Pertemuan 8 - Latihan 2</title>
</head>

<body>
    <nav class="navbar navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">Latihan 2</a>
        </div>
    </nav>

    <div class="container">
        <div class="row">
            <div class="col">
                <form method="POST">
                    Masukkan Bilangan Pertama : <br>
                    <input type="number" name="A" size=10><br>
                    Masukkan Bilangan Kedua : <br>
                    <input type="number" name="B" size=10><br>
                    <input type="submit" value="hitung">
                </form>
                <?php
                if ($_POST) {
                    $A = $_POST["A"];
                    $B = $_POST["B"];
                    function jumlah($A, $B)
                    {
                        $jumlahbil = $A + $B;
                        return $jumlahbil;
                    }
                    function kurang($A, $B)
                    {
                        $kurangbil = $A - $B;
                        return $kurangbil;
                    }
                    function kali($A, $B)
                    {
                        $kalibil = $A * $B;
                        return $kalibil;
                    }
                    function bagi($A, $B)
                    {
                        $bagibil = $A / $B;
                        return $bagibil;
                    }

                    echo "<br>";
                    echo ("Bilangan Pertama : ");
                    echo $A;
                    echo "<br>";
                    echo ("Bilangan Kedua : ");
                    echo $B;
                    echo "<br><br>";
                    echo "Hasil Penjumlahan 2 buah bilangan ";
                    echo "<br>";
                    $jumlahbil = jumlah($A, $B);
                    Printf("Penjumlahan antara : %d + %d = %d ", $A, $B, $jumlahbil);
                    echo "<br><br>";
                    echo "Hasil Pengurangan 2 buah bilangan ";
                    echo "<br>";
                    $kurangbil = kurang($A, $B);
                    Printf("Pengurangan antara : %d - %d = %d ", $A, $B, $kurangbil);
                    echo "<br><br>";
                    echo "Hasil Perkalian 2 buah bilangan ";
                    echo "<br>";
                    $kalibil = kali($A, $B);
                    Printf("Perkalian antara : %d * %d = %d ", $A, $B, $kalibil);
                    echo "<br><br>";
                    echo "Hasil Pembagian 2 buah bilangan ";
                    echo "<br>";
                    $bagibil = bagi($A, $B);
                    Printf("Pembagian antara : %d / %d = %d ", $A, $B, $bagibil);
                    echo "<br><br>";
                }

                ?>
            </div>
        </div>
    </div>
</body>

</html>
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <title>Tugas Latihan 2 - Pertemuan 7</title>
</head>

<body>
  <div class="d-flex flex-column justify-content-center align-items-center" style="height: 100vh;">
    <div class="text-center">
      <div class="display-1 fw-bolder">Ibnu Shevayanto</div>
      <div class="display-1 fw-bolder">( 191011402556 )</div>
      <div class="display-1">-</div>
      <div class="display-1">Latihan 2 - Pertemuan 7</div>
    </div>
  </div>

  <div class="container-fluid py-4">
    <div class="row">
      <div class="col-6 mb-2">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Latihan 4</h5>
            <p class="card-text">
              <?php
              $var = array(1, 2, 3, 4, 5, 6, 7);
              $scan = is_array($var);
              if ($scan == false) {
                $status = "bukan";
              } else {
                $status = "";
              }
              echo "\$var = array(1,2,3,4,5,6,7)";
              echo "<br>";
              echo "Variabel \$var $status merupakan array";
              ?>
            </p>
          </div>
        </div>
      </div>
      <div class="col-6 mb-2">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Latihan 5</h5>
            <p class="card-text">
              <?php
              $program = array('Bobo', 'Doraemon', 'Spiderman');
              list($Majalah, $Komik, $Film) = $program;
              echo "Jenis Buku & Hiburan :";
              echo "<br />";
              echo "Cerpen : $Majalah";
              echo "<br />";
              echo "Cerita Bergambar : $Komik";
              echo "<br />";
              echo "Bioskop : $Film";
              ?>
            </p>
          </div>
        </div>
      </div>
      <div class="col-6 mb-2">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Latihan 7</h5>
            <p class="card-text">
              <?php
              $var = array('18', '11', '2010');
              $tanggal = join("/", $var);
              echo "$tanggal";
              ?>
            </p>
          </div>
        </div>
      </div>
      <div class="col-6 mb-2">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Latihan 8</h5>
            <p class="card-text">
              <?php
              $program = array("HTML", "PHP", "CSS", "JavaScript");
              print_r($program);
              $cari = "HTML";
              if (in_array($cari, $program)) {
                echo "Program Basis Web $cari ada di dalam array";
              } else {
                echo "Program Basis Web $cari tidak ada di dalam array";
              }
              ?>
            </p>
          </div>
        </div>
      </div>
      <div class="col-6 mb-2">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Latihan 9</h5>
            <p class="card-text">
              <?php
              $tipe = array('1.10', 5.0, 1.13);
              if (in_array('5.0', $tipe, TRUE)) {
                echo "String \"5.0\" ada di dalam array";
              } else {
                echo "String \"5.0\" tidak ada di dalam array";
              }
              echo "<br />";
              if (in_array(1.13, $tipe, TRUE)) {
                echo "Bilangan 1.13 ada di dalam array";
              } else {
                echo "Bilangan 1.13 tidak ada di dalam array";
              }
              ?>
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>
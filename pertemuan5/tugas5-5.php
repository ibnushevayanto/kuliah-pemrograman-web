<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Tugas Bagian 1</title>
  </head>
  <body>
      <div class="container-fluid">
          <div class="row">
              <div class="col-12 pt-5">
                  <table class="table">
                      <thead>
                          <tr>
                              <th class="align-middle" rowspan="2">No.</th>
                              <th class="align-middle" rowspan="2">Nama</th>
                              <th class="text-center" colspan="31">Tanggal</th>
                          </tr>
                          <tr>
                              <?php 
                                for ($index=1; $index <= 31 ; $index++) { 
                                    echo "<td>{$index}</td>";
                                }
                              ?>
                          </tr>
                      </thead>
                      <tbody>
                          <?php
                          $file = fopen("absen1.txt", "r");
                          $no=1;
                          while (!feof($file)) {
                              $dataFile = fgets($file);
                              $data = explode(",", $dataFile);
                              $nama = $data[0];
                              unset($data[0]);
                              $kolomAbsen = "";

                              for ($indexKolomAbsen=1; $indexKolomAbsen <= 31; $indexKolomAbsen++) { 
                                $kolomAbsen .= "<td class='". (in_array($indexKolomAbsen, $data) ? 'bg-success' : '') ."'></td>";
                              }
                              echo "<tr>
                                <td>{$no}</td>
                                <td>{$nama}</td>
                                {$kolomAbsen}
                              </tr>";
                              $no++;
                          }
                          fclose($file);
                          ?>
                      </tbody>
                  </table>
              </div>
          </div>
      </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>
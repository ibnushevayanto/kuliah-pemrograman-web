<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Tugas Bagian 2</title>
  </head>
  <body>
      <div class="container-fluid">
          <div class="row pt-3">
              <form action="" method="POST" enctype="multipart/form-data">
                  <input type="file" name="absen" required>
                  <button type="submit">Submit</button>
              </form>
          </div>
          <div class="row">
              <div class="col-12 pt-3">
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
                          if($_FILES){
                              $file = fopen($_FILES['absen']['tmp_name'], "r");
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
                        }else{
                            echo "<tr><td class='text-center' colspan='33'>Silahkan Input Data Terlebih Dahulu</td></tr>";
                          }
                          ?>
                      </tbody>
                  </table>
              </div>
          </div>
      </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>
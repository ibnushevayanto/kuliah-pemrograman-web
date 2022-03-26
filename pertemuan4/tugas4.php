Tugas Perkalian <br/>
===================== <br/>
<?php 

function operasi($nilai){
    return 12 * $nilai;
}

for ($i=15; $i <= 45; $i++) { 
    if($i % 2 === 1) {
        $hasil = operasi($i);
        echo "12 * {$i} = {$hasil} <br/>";
    }else{
        continue;
    }
}
<?php
// soal 6

// function tampilkanHaloDunia(){
//     echo "Halo dunia! <br>";
//     tampilkanHaloDunia();
// }
// tampilkanHaloDunia();

// soal 6 

// for ($i=1; $i <=25; $i++){
//     echo "Perulangan ke-{$i} <br>";
// }
function tampilkanAngka(int $jumlah, int $indeks = 1) {
    echo "Perulangan ke-{$indeks} <br>";
//panggil dari sendiri selama sindeks <= $jumlah
if ($indeks < $jumlah){
    tampilkanAngka($jumlah, $indeks + 1);
 }
}
tampilkanAngka(20);

?>
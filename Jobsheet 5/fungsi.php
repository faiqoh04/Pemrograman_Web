<?php
// soal 1
//  function perkenalan() {

//     echo "Assalamualaikum, ";
//     echo "Perkenalkan, nama saya Siti Faiqoh<br/>"; //Tulis sesuai nama kalian
//     echo "Senang berkenalan dengan Anda<br/>";
// }

// //memanggil lagi tanpa mengisi parameter salam
// perkenalan();

// soal 2

// function perkenalan($nama, $salam){
//     echo $salam.", ";
//     echo "Perkenalkan, nama saya ".$nama."<br/>"; //Tulis sesuai nama kalian
//     echo "Senang berkenalan dengan Anda<br/>";
// }

 // // memanggil fungsi yang sudah dibuat
// perkenalan("Siti Faiqoh", "Hallo");

// echo "<hr>";

// $saya = "Elok";
// $ucapanSalam = "Selamat pagi";

// //memanggil lagi
// perkenalan($saya, $ucapanSalam);

// soal 3

// function perkenalan($nama, $salam = "Assalamualaikum"){
//     echo $salam.", ";
//     echo "Perkenalkan, nama saya ".$nama."<br/>"; //Tulis sesuai nama kalian
//     echo "Senang berkenalan dengan Anda<br/>";
// }

// // memanggil fungsi yang sudah dibuat
// perkenalan("Siti Faiqoh", "Hallo");

// echo "<hr>";

// $saya = "Elok";
// $ucapanSalam = "Selamat pagi";

// //memanggil lagi tanpa mengisi parameter salam
// perkenalan($saya);

// soal 4    

// function hitungUmur($thn_lahir, $thn_sekarang){
//     $umur = $thn_sekarang - $thn_lahir;
//     return $umur;
// }

// echo "Umur saya adalah ". hitungUmur(2004, 2024) ."tahun"
// // isi sesuai dengan tahun lahir kalian

// soal 5

function hitungUmur($thn_lahir, $thn_sekarang){
    $umur = $thn_sekarang - $thn_lahir;
    return $umur;
}
function perkenalan($nama, $salam = "Assalamualaikum"){
    echo $salam.", ";
    echo "Perkenalkan, nama saya " .$nama. "<br/>";
    // memanggil fungsi lain    
    echo "Saya berusia ". hitungUmur(2004, 2024) ." tahun<br/>";
    echo "Senang berkenalan dengan anda <br/>";
}

// memanggil fungsi perkenalan
    Perkenalan ("Siti Faiqoh")
?>
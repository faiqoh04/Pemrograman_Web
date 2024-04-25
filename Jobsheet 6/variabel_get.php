<?php
$nama = @$_GET['nama']; // Menggunakan kunci yang sesuai dengan yang dikirimkan melalui URL
$usia = @$_GET['usia']; // Menggunakan kunci yang sesuai dengan yang dikirimkan melalui URL
echo "Halo {$nama}! Apakah benar anda berusia {$usia} tahun?";
?>
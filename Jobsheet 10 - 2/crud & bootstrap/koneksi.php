<!-- <?php
// koneksi ke database
$koneksi = mysqli_connect("localhost","root","","prakwebdb");

// periksa koneksi
if(mysqli_connect_error()){
    die("Koneksi database gagal: ". mysqli_connect_error());
}
?> -->


<?php
if (!defined('HOST')) {
    define('HOST', 'localhost');
}
if (!defined('USER')) {
    define('USER', 'root');
}
if (!defined('PASS')) {
    define('PASS', '');
}
if (!defined('DBI')) {
    define('DBI', 'prakwebdb');
}

$koneksi = new mysqli(HOST, USER, PASS, DBI);

if ($koneksi->connect_error) {
    die("Koneksi database gagal: " . $koneksi->connect_error);
}
?>
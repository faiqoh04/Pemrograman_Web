<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Mendapatkan data dari form
    $namaLengkap = $_POST['namaLengkap'];
    $kelas = $_POST['kelas'];
    $asalSekolah = $_POST['asalSekolah'];
    $nomorHpSiswa = $_POST['nomorHpSiswa'];
    $nomorHpOrangtua = $_POST['nomorHpOrangtuaWali'];
    $email = $_POST['email'];

    // Simpan data ke dalam file
    $file = 'registrasi_data.txt';
    $data = "$namaLengkap | $kelas | $asalSekolah | $nomorHpSiswa | $nomorHpOrangtua | $email\n";

    // Buka file untuk ditulis
    $fp = fopen($file, 'a');
    // Tulis data ke file
    fwrite($fp, $data);
    // Tutup file
    fclose($fp);

    // Simpan data pendaftaran ke dalam session
    $_SESSION["last_registration"] = array(
        "namaLengkap" => $namaLengkap,
        "kelas" => $kelas,
        "asalSekolah" => $asalSekolah,
        "nomorHpSiswa" => $nomorHpSiswa,
        "nomorHpOrangtua" => $nomorHpOrangtua,
        "email" => $email
    );

    // Set cookie untuk status pendaftaran berhasil
    setcookie("registration_status", "success", time() + (86400 * 30), "/");

    // Redirect ke halaman sukses
    header("Location: sukses.php");
    exit;
}
?>
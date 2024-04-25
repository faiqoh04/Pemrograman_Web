<?php
// Inisialisasi koneksi mysqli
$connect = mysqli_connect("localhost", "root", "", "prakwebdb");

// $sqlbuat = "CREATE TABLE IF NOT EXISTS user (
//     id INT AUTO_INCREMENT PRIMARY KEY,
//     username VARCHAR(50),
//     password VARCHAR(50)
// )";

// if (mysqli_query($connect, $sqlbuat)) {
//     echo "Tabel berhasil dibuat atau sudah ada sebelumnya<br>";
// } else {
//     throw new Exception("Tabel gagal dibuat: ".mysqli_error($connect));
// }

// insert into data pada tabel user
// $sql = "INSERT INTO user(id, username, password) VALUES ('1', 'admin', '" . md5('123') . "')";

// if (mysqli_query($connect, $sql)) {
//     echo "Data berhasil ditambahkan ke tabel user.";
// } else {
//     throw new Exception ("Record gagal ditambahkan: " . mysqli_error($connect));
// }

// Tutup koneksi mysqli
// mysqli_close($connect);
?>



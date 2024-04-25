<!-- <!DOCTYPE html>
<html lang="en">
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Anggota</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h2>Data Anggota</h2>
        <a href="create.php" class="btn-tambah">Tambah Anggota</a>
        <?php
            include ('koneksi.php');

            $query = "SELECT * FROM anggota order by id desc";
            $result = mysqli_query($koneksi, $query);

            if (mysqli_num_rows($result) > 0) {
                $no = 1;
                echo "<table>";
                echo "<tr><th>No</th><th>Nama</th><th>Jenis Kelamin</th>
                     <th>Alamat</th><th>No. Telp</th><th>Aksi</th></tr>";
                while ($row = mysqli_fetch_array($result)) {
                    $kelamin = ($row["jenis_kelamin"] === 'L')? 'Laki-Laki' : 'Perempuan';
                    echo "<tr>
                          <td>". $no++ . "</td><td>" . $row["nama"] ."</td>
                          <td>". $kelamin . "</td><td>" . $row["alamat"] ."</td>
                          <td>". $row["no_telp"] ."</td>
                          <td><a href='edit.php?id=" . $row["id"] . "'>Edit</a> |
                          <a href='#' onclick='konfirmasiHapus(" . $row["id"] . ", \"". $row["nama"] ."\")'>Hapus</a></td>
                          </tr>";
                }
                echo "</table>";
            } else {
                echo "Tidak ada data.";
            }
            mysqli_close($koneksi);
        ?>
    </div>
    <script>
        function konfirmasiHapus(id, nama){
            var konfirmasi = confirm("Apakah anda yakin ingin menghapus data dengan Nama " + nama + "?");
            if (konfirmasi){
                window.location.href = "proses.php?aksi=hapus&id=" + id;
            }
        }
    </script>
</body>
</html> -->


<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Anggota</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-4">
        <h2>Data Anggota</h2>
        <a class="btn btn-success mt-2" href="create.php">Tambah Data</a>
        <br><br>
        <?php
        include('koneksi.php');
        $query = "SELECT * FROM anggota order by id desc";
        $result = mysqli_query($koneksi, $query);
        ?>
        <table class="table">
            <thead class="thead-light">
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Jenis Kelamin</th>
                    <th>Alamat</th>
                    <th>No. Telp</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                while ($row = mysqli_fetch_assoc($result)) {
                    $kelamin = ($row["jenis_kelamin"] == 'L') ? 'Laki-Laki' : 'Perempuan';
                    ?>
                    <tr>
                        <td><?= $no++ ?></td>
                        <td><?= $row["nama"] ?></td>
                        <td><?= $kelamin ?></td>
                        <td><?= $row["alamat"] ?></td>
                        <td><?= $row["no_telp"] ?></td>
                        <td>
                            <a class="btn btn-primary" href="edit.php?id=<?= $row["id"] ?>">Edit</a>
                            <a class="btn btn-danger" href="proses.php?aksi=hapus&id=<?= $row["id"] ?>">Hapus</a>
                        </td>
                    </tr>
                    <?php
                }
                ?>
            </tbody>
        </table>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html> -->


<?php
include("auth.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Crsf Token -->
    <meta name="csrf-token" content="<?= $_SESSION['csrf_token'] ?>">
    <!-- Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <!-- Datatable -->
    <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet">
    <title>Data Anggota</title>
</head>

<body>
    <nav class="navbar navbar-dark bg-primary">
        <a href="index.php" class="navbar-brand" style="color: #fff">
            CRUD Dengan Ajax
        </a>
    </nav>

    <div class="container">
        <h2 align="center" style="margin: 30px;">Data Anggota</h2>

        <form method="post" class="form-data" id="form-data">
            <div class="row">
                <div class="col-sm-9">
                    <div class="form-group">
                        <label>Nama</label>
                        <input type="hidden" name="id" id="id">
                        <input type="text" name="nama" id="nama" class="form-control" required="true">
                        <p class="text-danger" id="err_nama"></p>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="form-group">
                        <label>Jenis Kelamin</label><br>
                        <input type="radio" name="jenis_kelamin" id="jenkel1" value="L" required="true">Laki-laki
                        <input type="radio" name="jenis_kelamin" id="jenkel2" value="P" required="true">Perempuan
                    </div>
                    <p class="text-danger" id="err_jenis_kelamin"></p>
                </div>
            </div>

            <div class="form-group">
                <label>Alamat</label>
                <textarea name="alamat" id="alamat" class="form-control"></textarea>
                <p class="text-danger" id="err_alamat"></p>
            </div>

            <div class="form-group">
                <label>No Telepon</label>
                <input type="number" name="no_telp" id="no_telp" class="form-control" required="true">
                <p class="text-danger" id="err_no_telp"></p>
            </div>

            <div class="form-group">
                <button type="button" name="simpan" id="simpan" class="btn btn-primary">
                    <i class="fa fa-save"></i> Simpan
                </button>
            </div>
        </form>

        <hr>

        <div class="data"></div>
    </div>
    <div class="text-center">&copy; <?= date('Y') ?> Copyright:
        <a href="https://google.com/">Desain Dan Pemrograman Web</a>
    </div>
    <!-- JQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Datatable -->
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            $.ajaxSetup({
                headers: {
                    'Csrf-Token': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $('.data').load("data.php");


            // $("#simpan").click(function() {
            //     var data = $('.form-data').serialize();
            //     var jenkel1 = document.getElementById("jenkel1").value;
            //     var jenkel2 = document.getElementById("jenkel2").value;
            //     var nama = document.getElementById("nama").value;
            //     var alamat = document.getElementById("alamat").value;
            //     var no_telp = document.getElementById("no_telp").value;

            //     if (nama == "") {
            //         document.getElementById("err_nama").innerHTML = "Nama Harus Diisi";
            //     } else {
            //         document.getElementById("err_nama").innerHTML = "";
            //     }

            //     if (alamat == "") {
            //         document.getElementById("err_alamat").innerHTML = "Alamat Harus Diisi";
            //     } else {
            //         document.getElementById("err_alamat").innerHTML = "";
            //     }

            //     if (document.getElementById("jenkel1").checked == false && document.getElementById("jenkel2").checked == false) {
            //         document.getElementById("err_jenis_kelamin").innerHTML = "Jenis Kelamin Harus Diisi";
            //     } else {
            //         document.getElementById("err_jenis_kelamin").innerHTML = "";
            //     }

            //     if (no_telp == "") {
            //         document.getElementById("err_no_telp").innerHTML = "No Telepon Harus Diisi";
            //     } else {
            //         document.getElementById("err_no_telp").innerHTML = "";
            //     }
            //     if (nama != "" && alamat != "" && (document.getElementById("jenkel1").checked == true || document.getElementById("jenkel2").checked == true) && no_telp != "") {
            //         $.ajax({
            //             type: 'POST',
            //             url: "form_action.php",
            //             data: data,
            //             success: function() {
            //                 $('.data').load("data.php");
            //                 document.getElementById("id").value = "";
            //                 document.getElementById("form-data").reset();
            //             },
            //             error: function(response) {
            //                 console.log(response.responseText);
            //             }
            //         });
            //     }

            // })
        });
    </script>
</body>

</html>
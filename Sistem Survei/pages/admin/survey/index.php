<?php
include "config/database.php";

$db = new Database();

// Fetch data from the database
$sql = "SELECT soal_id, kategori_id, soal_jenis, no_urut, soal_nama FROM m_survey_soal";
$result = $db->conn->query($sql);

?>

<div class="wrapper">
<?php include "components/sidebar.php"; ?>
    <div class="main my-3 p-5 bg-body rounded shadow-sm">
        <br>
        <h5 class="fw-bold fs-4 mb-3">Data Survei</h5>
        <br>
        <!-- Tombol tambah data -->
        <div class="pb-3">
            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#inputDataModal">+ Tambah Soal</button>
        </div>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th class="col-md-1">No</th>
                    <th class="col-md-2">Kategori</th>
                    <th class="col-md-2">Jenis Survey</th>
                    <th class="col-md-1">No Urut</th>
                    <th class="col-md-3">Soal</th>
                    <th class="col-md-2">Aksi</th>
                </tr>
                </thead>
            <tbody>
                <?php
                    $no = 1;
                    while($row = $result->fetch_assoc()) {
                        // Fetch category name from category table based on kategori_id
                        $kategori_sql = "SELECT kategori_nama FROM m_kategori WHERE kategori_id = " . $row['kategori_id'];
                        $kategori_result = $db->conn->query($kategori_sql);
                        $kategori_row = $kategori_result->fetch_assoc();
                        $kategori_nama = $kategori_row['kategori_nama'];

                        echo "<tr>";
                        echo "<td>" . $no++ . "</td>";
                        echo "<td>" . $kategori_nama . "</td>";
                        echo "<td>" . ucfirst($row['soal_jenis']) . "</td>";
                        echo "<td>" . $row['no_urut'] . "</td>";
                        echo "<td>" . $row['soal_nama'] . "</td>";
                        echo "<td>";
                        echo "<button class='btn btn-warning btn-sm' onclick='editPertanyaan(" . $row['soal_id'] . ")' >Edit</button>";
                        echo "          ";
                        echo "<button class='btn btn-danger btn-sm' onclick='deletePertanyaan(" . $row['soal_id'] . ")'>Hapus</button>";
                        echo "</td>";
                        echo "</tr>";
                    }
                ?>
            </tbody>
        </table>
    </div>
</div>
<?php include "create.php"; ?>  


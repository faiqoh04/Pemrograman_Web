<?php 
    include "config/database.php";

    $db = new Database();
    $conn = $db->conn; 

    $sql = "SELECT COUNT(*) AS total_users FROM m_user";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Output data of each row
        while($row = $result->fetch_assoc()) {
            $total_users = $row["total_users"];
        }
    } else {
        $total_users = 0;
    }
    $conn->close();
?>
<div class="wrapper">
    <?php include('./components/sidebar.php');?>
    <div class="main my-3 p-4 bg-body rounded shadow-sm">
        <main class="content px-4 py-5">
            <div class="container-fluid">
                <div class="mb-3">
                    <h5 class="fw-bold fs-4 mb-3">Beranda</h5>
                    <div class="row">
                        <div class="col-12 col-md-4">
                            <div class="card border-0">
                                <div class="card-body py-4">
                                    <h7 class="mb-2 fw-bold">LAPORAN HARI INI</h7>
                                    <br><br>
                                    <p class="mb-2">User Terdaftar : <?php echo $total_users; ?></p>
                                </div>
                            </div>
                        </div>
                        <!-- Repeat similar structure for other cards -->
                    </div>
                    <hr>
                    <br>
                    <h5 class="fw-bold fs-4 my-3">Nilai Preferensi (P)</h5><br>
                    <div class="card-header">
                        <h5 class="card-title">Tabel Nilai Preferensi (P)</h5><br>
                    </div>
                    <div class="card-body">
                        <p class="card-text">
                            Nilai preferensi (P) merupakan penjumlahan dari perkalian matriks ternormalisasi R dengan vektor bobot W.
                        </p>
                        <br>    
                    </div>
                    <div class="row">
                        <div class="col-8">
                            <table class="table table-striped">
                                <thead>
                                    <tr class="highlight">
                                        <th scope="col">No</th>
                                        <th scope="col">Alternatif</th>
                                        <th scope="col">Hasil</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>(A1) Kualitas Pendidikan</td>
                                        <td>0.93</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>(A2) Fasilitas</td>
                                        <td>0.87</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td>(A3) Pelayanan</td>
                                        <td>0.83</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">4</th>
                                        <td>(A4) Lulusan</td>
                                        <td>0.86</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</div>

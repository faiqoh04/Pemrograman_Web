<?php
    $db = new Database();
    $conn = $db->conn;

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $kategori = $_POST["kategori"];
        $jenis = $_POST["jenis"];
        $no_urut = $_POST["no_urut"];
        $soal = $_POST["soal"];
        $kriteria = $_POST["kriteria"];

        $sql = "INSERT INTO m_survey_soal (kategori_id, soal_jenis, no_urut, soal_nama, kriteria) VALUES (?, ?, ?, ?, ?)";

        $stmt = $conn->prepare($sql);
        $stmt->bind_param("isiss", $kategori, $jenis, $no_urut, $soal, $kriteria);

        if ($stmt->execute()) {
            header("Location: ?page=admin/survey");
            exit();
        } else {
            echo "Gagal menambahkan pertanyaan survey.";
        }

        $stmt->close();
        $conn->close();
    }
?>

<div class="modal fade" id="inputDataModal" tabindex="-1" aria-labelledby="modal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Input Data</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <!-- Form input data -->
            <form action="#" method="POST">
                <div class="form-group">
                    <label class="form-label">Kategori Survey</label>
                    <select name="kategori" class="form-select" required>
                    <option value="1">Kualitas Pendidikan</option>
                    <option value="2">Fasilitas</option>
                    <option value="3">Pelayanan</option>
                    <option value="4">Lulusan</option>
                    </select>
                </div>
                <div class="form-group">
                    <label class="form-label">Jenis Survey</label>
                    <select name="jenis" class="form-select" required>
                    <option value="alumni">Alumni</option>
                    <option value="dosen">Dosen</option>
                    <option value="industri">Industri</option>
                    <option value="mahasiswa">Mahasiswa</option>
                    <option value="ortu">Orang Tua</option>
                    <option value="tendik">Tendik</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Nomor Urut</label>
                    <input type="text" name="no_urut" class="form-control" placeholder="Masukkan No Urut" required>
                </div>
                <div class="form-group">
                    <label>Soal</label>
                    <textarea name="soal" class="form-control" placeholder="Masukkan Soal" required></textarea>
                </div>
                <div class="form-group">
                    <label class="form-label">Kriteria Survey</label>
                    <select name="kriteria" class="form-select" required>
                    <option value="Tangibles">Tangibles</option>
                    <option value="Reliability">Reliability</option>
                    <option value="Responsiveness">Responsiveness</option>
                    <option value="Assurance">Assurance</option>
                    <option value="Empathy">Empathy</option>
                    </select>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
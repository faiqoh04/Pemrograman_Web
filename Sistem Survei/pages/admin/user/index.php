<?php
include "config/database.php";

$db = new Database();

// Fetch data from the database
$sql = "SELECT user_id, username, password, role FROM m_user";
$result = $db->conn->query($sql);
?>

<div class="wrapper">
<?php include "components/sidebar.php"; ?>
    <div class="main my-3 p-5 bg-body rounded shadow-sm">
        <br>
        <h5 class="fw-bold fs-4 mb-3">Data User</h5>
        <br>
        <!-- Tombol tambah data -->
        <div class="pb-3">
            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#inputDataModal">+ Tambah User</button>
        </div>
        <div class="col-10">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th class="col-md-1">No</th>
                        <th class="col-md-1">Username</th>
                        <th class="col-md-1">Role</th>
                        <th class="col-md-1">Aksi</th>
                    </tr>
                    </thead>
                <tbody>
                    <?php
                        $no = 1;
                        while($row = $result->fetch_assoc()) {
                            echo "<tr>";
                            echo "<td>" . $no++ . "</td>";
                            echo "<td>" . htmlspecialchars($row['username']) . "</td>";
                            echo "<td>" . htmlspecialchars($row['role']) . "</td>";
                            echo "<td>";
                            echo "<a href='edit.php?id=" . $row['user_id'] . "' class='btn btn-warning btn-sm'>Edit</a>";
                            echo "          ";
                            echo "<a href='delete.php?id=" . $row['user_id'] . "' class='btn btn-danger btn-sm'>Hapus</a>";
                            echo "</td>";
                            echo "</tr>";
                        }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php include "create.php"; ?>
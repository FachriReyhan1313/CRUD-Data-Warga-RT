<?php 
include 'config.php'; 
$success = isset($_GET['success']) ? $_GET['success'] : '';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Data Warga RT</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <style>
        body {
            background: linear-gradient(135deg, #74ebd5, #ACB6E5);
            min-height: 100vh;
        }
        .card {
            border-radius: 15px;
            box-shadow: 0px 8px 30px rgba(0,0,0,0.2);
        }
        .table-hover tbody tr:hover {
            background-color: rgba(0, 123, 255, 0.1);
            transition: 0.3s;
        }
        .btn-custom {transition: transform 0.2s ease-in-out;}
        .btn-custom:hover {transform: scale(1.1);}
    </style>
</head>
<body>
<div class="container py-5 animate__animated animate__fadeIn">
    <div class="card p-4">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h2 class="mb-0"><i class="bi bi-people"></i> Data Warga RT</h2>
            <a href="tambah.php" class="btn btn-success btn-custom">
                <i class="bi bi-person-plus"></i> Tambah Warga
            </a>
        </div>

        
        <?php if($success): ?>
            <div class="alert alert-success alert-dismissible fade show animate__animated animate__fadeInDown" role="alert">
                <?= $success === 'add' ? 'Data berhasil ditambahkan!' 
                     : ($success === 'edit' ? 'Data berhasil diupdate!' 
                     : 'Data berhasil dihapus!') ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php endif; ?>

        <table class="table table-hover table-bordered text-center">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>NIK</th>
                    <th>Alamat</th>
                    <th>No HP</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
            <?php
            $result = mysqli_query($conn, "SELECT * FROM warga ORDER BY id ASC");
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>
                        <td>{$row['id']}</td>
                        <td>{$row['nama']}</td>
                        <td>{$row['nik']}</td>
                        <td>{$row['alamat']}</td>
                        <td>{$row['no_hp']}</td>
                        <td>
                            <a href='edit.php?id={$row['id']}' class='btn btn-warning btn-sm btn-custom'><i class='bi bi-pencil-square'></i></a>
                            <a href='hapus.php?id={$row['id']}' class='btn btn-danger btn-sm btn-custom' onclick=\"return confirm('Yakin hapus data ini?');\"><i class='bi bi-trash'></i></a>
                        </td>
                      </tr>";
            }
            ?>
            </tbody>
        </table>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

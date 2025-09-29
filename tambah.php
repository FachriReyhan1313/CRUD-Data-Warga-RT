<?php
include 'config.php';

$error = "";
if (isset($_POST['submit'])) {
    $nama   = trim($_POST['nama']);
    $nik    = trim($_POST['nik']);
    $alamat = trim($_POST['alamat']);
    $no_hp  = trim($_POST['no_hp']);

    if(strlen($nama) < 3){
        $error = "Nama minimal 3 karakter!";
    } elseif(strlen($alamat) < 5){
        $error = "Alamat minimal 5 karakter!";
    } elseif(!preg_match('/^[0-9]{10,15}$/', $no_hp)){
        $error = "No HP hanya angka dan minimal 10 digit!";
    } else {
        $cekDuplikat = mysqli_query($conn, "SELECT * FROM warga 
            WHERE nama='$nama' AND nik='$nik' AND alamat='$alamat' AND no_hp='$no_hp'");
        if (mysqli_num_rows($cekDuplikat) > 0) {
            $error = "Data sudah ada di database!";
        } else {
            $cekNik = mysqli_query($conn, "SELECT * FROM warga WHERE nik='$nik'");
            if (mysqli_num_rows($cekNik) > 0) {
                $error = "NIK sudah digunakan!";
            } else {
                $query = "INSERT INTO warga (nama, nik, alamat, no_hp) VALUES ('$nama', '$nik', '$alamat', '$no_hp')";
                mysqli_query($conn, $query);
                header("Location: index.php?success=add");
                exit;
            }
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tambah Warga</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <style>
        body {background: linear-gradient(135deg, #74ebd5, #ACB6E5); min-height: 100vh;}
        textarea {resize: none; height: 100px; overflow-y: auto;}
    </style>
</head>
<body>
<div class="container py-5 animate__animated animate__fadeInUp">
    <div class="card shadow-lg p-4">
        <h2 class="mb-4">Tambah Data Warga</h2>

        <?php if($error): ?>
            <div class="alert alert-danger alert-dismissible fade show animate__animated animate__fadeInDown" role="alert">
                <?= $error ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php endif; ?>

        <form method="post">
            <div class="mb-3">
                <label class="form-label">Nama</label>
                <input type="text" name="nama" class="form-control" required>
            </div>
            <div class="mb-3">
                <label class="form-label">NIK</label>
                <input type="text" name="nik" class="form-control" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Alamat</label>
                <textarea name="alamat" class="form-control" required></textarea>
            </div>
            <div class="mb-3">
                <label class="form-label">No HP</label>
                <input type="text" name="no_hp" class="form-control" required>
            </div>
            <button type="submit" name="submit" class="btn btn-success"><i class="bi bi-save"></i> Simpan</button>
            <a href="index.php" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

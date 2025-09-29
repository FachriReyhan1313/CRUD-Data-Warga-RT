<?php
include 'config.php';

$id = $_GET['id'];
$result = mysqli_query($conn, "SELECT * FROM warga WHERE id=$id");
$data = mysqli_fetch_assoc($result);

if (isset($_POST['submit'])) {
    $nama   = $_POST['nama'];
    $nik    = $_POST['nik'];
    $alamat = $_POST['alamat'];
    $no_hp  = $_POST['no_hp'];

    $query = "UPDATE warga SET nama='$nama', nik='$nik', alamat='$alamat', no_hp='$no_hp' WHERE id=$id";
    mysqli_query($conn, $query);

    header("Location: index.php?success=edit");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Warga</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <style>
        body {
            background: linear-gradient(135deg, #74ebd5, #ACB6E5);
            min-height: 100vh;
        }
        textarea {
            resize: none;         
            height: 100px;        
            overflow-y: auto;     
        }
    </style>
</head>
<body>
<div class="container py-5 animate__animated animate__fadeInUp">
    <div class="card shadow-lg p-4">
        <h2 class="mb-4">Edit Data Warga</h2>
        <form method="post">
            <div class="mb-3">
                <label class="form-label">Nama</label>
                <input type="text" name="nama" class="form-control" value="<?= $data['nama'] ?>" required>
            </div>
            <div class="mb-3">
                <label class="form-label">NIK</label>
                <input type="text" name="nik" class="form-control" value="<?= $data['nik'] ?>" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Alamat</label>
                <textarea name="alamat" class="form-control" required><?= $data['alamat'] ?></textarea>
            </div>
            <div class="mb-3">
                <label class="form-label">No HP</label>
                <input type="text" name="no_hp" class="form-control" value="<?= $data['no_hp'] ?>">
            </div>
            <button type="submit" name="submit" class="btn btn-primary"><i class="bi bi-save"></i> Update</button>
            <a href="index.php" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
</div>
</body>
</html>
x   
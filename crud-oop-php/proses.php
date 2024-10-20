<?php
    include 'database.php';
    $db_0033 = new Database();
    $aksi = $_GET['aksi'];

    function uploadGambar() 
    {
        if (isset($_FILES['gambar']) && $_FILES['gambar']['error'] === 0) {
            $targetDir = "uploads/";
            if (!file_exists($targetDir)) mkdir($targetDir, 0777, true);
            $fileExt = strtolower(pathinfo($_FILES['gambar']['name'], PATHINFO_EXTENSION));
            if (!in_array($fileExt, ['jpg', 'jpeg', 'png'])) return false;
            $targetFile = $targetDir . uniqid() . '.' . $fileExt;
            return move_uploaded_file($_FILES['gambar']['tmp_name'], $targetFile) ? $targetFile : false;
        }
        return false;
    }

    if ($aksi === 'tambah') {
        $gambar = uploadGambar();
        if ($gambar) {
            $db_0033->tambahData($_POST['nama'], $_POST['jenis_kelamin'], $_POST['alamat'], $_POST['nohp'], $gambar);
            header("location:index.php?status=success");
            exit();
        } else {
            header("location:index.php?status=error");
            exit();
        }
    } elseif ($aksi === 'update') {
        $gambar = uploadGambar();
        $db_0033->updateData($_POST['id'], $_POST['nama'], $_POST['jenis_kelamin'], $_POST['alamat'], $_POST['nohp'], $gambar ?: null);
        header("location:index.php?");
        exit();
    } elseif ($aksi === 'hapus') {
        $db_0033->hapusData($_GET['id']);
        header("location:index.php?");
        exit();
    }
?>

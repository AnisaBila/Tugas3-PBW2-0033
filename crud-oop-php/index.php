<?php
include 'database.php';
$db_0033 = new Database();
$dataUsers = $db_0033->tampilData();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD OOP PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>
<div class="container mt-3">
    <h1>CRUD OOP PHP</h1>
    <hr>
    <a href="input.php" class="btn btn-success">Tambah Data</a>
    <hr>
    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama</th>
                <th scope="col">Jenis Kelamin</th>
                <th scope="col">Alamat</th>
                <th scope="col">No HP</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($dataUsers as $index => $dataUser): ?>
                <tr>
                    <th scope="row"><?php echo $index + 1; ?></th>
                    <td><?php echo $dataUser['nama']; ?></td>
                    <td><?php echo $dataUser['jenis_kelamin']; ?></td>
                    <td><?php echo $dataUser['alamat']; ?></td>
                    <td><?php echo $dataUser['nohp']; ?></td>
                    <td>
                        <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#modal<?php echo $dataUser['id']; ?>">Detail</button>
                        <div class="modal fade" id="modal<?php echo $dataUser['id']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" style="width: 27rem;">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Detail User</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <img src="<?php echo $dataUser['gambar']; ?>" class="card-img-top mt-3" alt="Foto <?php echo $dataUser['nama']; ?>" style="width: 100px;">
                                        <table class="table table-bordered no-margin">
                                            <tbody>
                                                <tr><th>Nama</th><td><?php echo $dataUser['nama']; ?></td></tr>
                                                <tr><th>Jenis Kelamin</th><td><?php echo $dataUser['jenis_kelamin']; ?></td></tr>
                                                <tr><th>Alamat</th><td><?php echo $dataUser['alamat']; ?></td></tr>
                                                <tr><th>No HP</th><td><?php echo $dataUser['nohp']; ?></td></tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a href="edit.php?id=<?php echo $dataUser['id'] ?>" class="btn btn-warning btn-sm">Edit</a>
                        <a href="#" class="btn btn-danger btn-sm" onclick="hapusData(<?php echo $dataUser['id']; ?>)">Hapus</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<script>
function getQueryParameter(name) {
    let urlParams = new URLSearchParams(window.location.search);
    return urlParams.get(name);
}
let status = getQueryParameter('status');
if (status === 'success') {
    Swal.fire({
        title: 'Berhasil!',
        text: 'Data berhasil disimpan.',
        icon: 'success',
        confirmButtonText: 'OK'
    }).then(() => {
        history.replaceState(null, '', window.location.pathname);
    });
} else if (status === 'error') {
    Swal.fire({
        title: 'Gagal!',
        text: 'Data gagal disimpan.',
        icon: 'error',
        confirmButtonText: 'Coba Lagi'
    }).then(() => {
        history.replaceState(null, '', window.location.pathname);
    });
}

function hapusData(id) {
    Swal.fire({
        title: 'Apakah Anda yakin?',
        text: "Data ini akan dihapus secara permanen!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Ya, hapus!',
        cancelButtonText: 'Batal'
    }).then((result) => {
        if (result.isConfirmed) {
            window.location.href = "proses.php?id=" + id + "&aksi=hapus";
        }
    });
}
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

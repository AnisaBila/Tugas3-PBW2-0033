<?php
    include 'database.php';
    $db_0033 = new Database;
    $detail = $db_0033->editData($_GET['id']);

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD OOP PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <div class="container mt-3">
        <h1>CRUD OOP PHP</h1>
        <h4>Edit Data</h4>
        <hr class="mt-0">

        <!-- form edit data -->
        <form method="POST" action="proses.php?aksi=update" class="my-2">

            <?php
                foreach($detail as $dataUser){
            ?>

            <!-- id -->
            <input type="hidden" id="id" name="id" value="<?php echo $dataUser['id'] ?>">

            <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $dataUser['nama'] ?>">
            </div>
            <div class="mb-3">
              <label for="Select" class="form-label">Jenis Kelamin</label>
              <select id="Select" class="form-select" id="jenis_kelamin" name="jenis_kelamin" value="<?php echo $dataUser['jenis_kelamin'] ?>">
                <option>Laki-laki</option>
                <option>Perempuan</option>
              </select>
            </div>
            <div class="mb-3">
                <label for="alamat" class="form-label">Alamat</label>
                <input type="text" class="form-control" id="alamat" name="alamat" value="<?php echo $dataUser['alamat'] ?>">
            </div>
            <div class="mb-3">
                <label for="nohp" class="form-label">No HP</label>
                <input type="text" class="form-control" id="nohp" name="nohp" value="<?php echo $dataUser['nohp'] ?>">
            </div>
            <div class="mb-3">
              <label for="gambar" class="form-label">Foto User</label>
              <input class="form-control" id="gambar" name="gambar" type="file" value="<?php echo $dataUser['gambar'] ?>">
            </div>
            <?php
            }
            ?>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
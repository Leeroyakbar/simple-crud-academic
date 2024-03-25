<?php
require_once('Database.php');
$db = new Database();

$mahasiswa = $db->select("SELECT * FROM mahasiswa");

?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>CRUD MAHASISWA</title>
</head>

<body>
    <div class="container mt-5">
        <h2>Data Mahasiswa</h2>
        <hr>
        <a href="form-add.php" class="btn btn-primary mb-3">Tambah Data</a>
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Usia</th>
                    <th>Opsi</th>
                </tr>
            </thead>
            <tbody>
                <?php $no=1; ?>
                <?php foreach ($mahasiswa as $mahasiswa) : ?>
                <tr>
                    <td><?= $no++; ?></td>
                    <td><?= $mahasiswa['nama']; ?></td>
                    <td><?= $mahasiswa['alamat']; ?></td>
                    <td><?= $mahasiswa['umur']; ?></td>
                    <td width="15%" class="text-center">
                        <a href="delete-mahasiswa.php?id=<?= $mahasiswa['id']; ?>" class="btn btn-danger"
                            onclick="return confirm('Data akan dihapus?')">Hapus</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>
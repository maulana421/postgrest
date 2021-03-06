<?php

    include 'connection.php';
    $tampil = pg_query("SELECT * FROM siswa");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Home</title>
</head>
<body>
    <div class="container">
        <div class="card mt-5">
            <div class="card-body shadow" style="margin-auto;">
                <a href="tambah.php" class="btn btn-primary" >Tambah</a>
                <h3 class="text-center"><b>Daftar Data</b></h3>
                <table class="table table-hover table-success">
                    <thead>
                        <tr>
                            <td>No</td>
                            <td>NIM</td>
                            <td>Nama</td>
                            <td>Prodi</td>
                            <td>Aksi</td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        while($data = pg_fetch_array($tampil)):
                        ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><?= $data['nim'];?></td>
                            <td><?= $data['nama'];?></td>
                            <td><?= $data['prodi'];?></td>
                            <td>
                                <a href="detail.php?id=<?= $row['id']; ?>" class="btn btn-secondary">Detail</a>
                                <a href="edit.php?id=<?= $data['id']; ?>" class="btn btn-warning">Edit</a>
                                <a href="delete.php?id=<?= $data['id']; ?>" class="btn btn-danger">Hapus</a>
                            </td>
                        </tr>
                        <?php endwhile;?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>

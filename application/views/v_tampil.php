<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
    <title>Crud Data Warga</title>
</head>
<body>

<div class="container ">
    <div class="text-center">
        <h1 class="my-4">Crud Data Warga</h1>
        <a href="<?php echo site_url('crud/tambah'); ?>" class="btn btn-primary mb-3">Tambah Data</a>
    </div>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama</th>
                <th scope="col">Alamat</th>
                <th scope="col">Pekerjaan</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1; foreach($user as $u) { ?>
                <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $u->nama ?></td>
                    <td><?php echo $u->alamat ?></td>
                    <td><?php echo $u->pekerjaan ?></td>
                    <td>
                        <a href="<?php echo site_url('crud/edit/'.$u->id); ?>" class="btn btn-warning btn-sm">Edit</a>
                        <a href="<?php echo site_url('crud/hapus/'.$u->id); ?>" class="btn btn-danger btn-sm">Hapus</a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>

</body>
</html>

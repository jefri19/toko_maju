<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$title?></title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <nav>
       <button> <a href="<?php echo base_url('tambah_barang') ?>">Tambah data barang</a></button>
    </nav>
    <table width="100%" border="1px" cellspacing="0">
    <caption>
        <h1>DATA BARANG TOKO MAJU JAYA</h1>
    </caption >
    <thead>
        <tr>
            <th>No</th>
            <th>Nama Barang</th>
            <th>Kategori</th>
            <th>Harga</th>
            <th>Stok</th>
            <th colspan="">Aksi</th>
        </tr>
        <tbody>
            <?php $no=1; foreach($barang as $brg) : ?>

            <tr>
                <td><?php echo $no++?></td>
                <td><?php echo $brg['nama_brg']?></td>
                <td><?php echo $brg['kategori']?></td>
                <td><?php echo $brg['harga']?></td>
                <td><?php echo $brg['stok']?></td>
                <td>
                   <button><a href="<?= base_url('detail/'.$brg["id"])?>">Detail</a></button> |
                   <button><a href="<?= base_url('hapus/'.$brg["id"])?>">Hapus</a></button>  | <button> <a href="<?= base_url('edit/'.$brg["id"])?>">Edit</a></button>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </thead>
    </table>
</body>

</html>

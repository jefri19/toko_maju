<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Edit</title>
</head>
<body>
    <form action="<?php echo base_url('editBarang')?>" method="post">
    <input type="hidden" name="id" value="<?php echo $barang->id?>">

        <p>Nmama Barang</p>
        <input type="text" name="nama" required value="<?php echo $barang->nama_brg ?>">
        <p>kategori</p>
        <select type="text" name="kategori" >
            <option value="">Pilih Kategori</option>
            <!-- untuk menampilkan pilihan option pada tampilan form edit -->
            <?php
                foreach($kategori as $key=>$value):
                if($key==$barang->kategori):
            ?>

            <option value="<?= $key?>" selected><?=$value?></option>
                <?php else: ?>
            <option value="<?= $key?>" ><?= $value?></option>  
            
            <?php 
                endif;
                endforeach;
            ?>
        </select>


        <p>Harga</p>
        <input type="int" name="harga" required value="<?php echo $barang->harga?>">
        <p>tgl.Pengiriman</p>
        <input type="date" name="tgl_kirim" required value="<?php echo $barang->tgl_kirim?>">
        <p>Expiret</p>
        <input type="date" name="expiret" required value="<?php echo $barang->expiret?>">
        <p>Stoc</p>
        <input type="text" name="stok" required value="<?php echo $barang->stok?>">
        <br><br>
        <button type="submit">Edit Barang</button>

    </form>
</body>
</html>
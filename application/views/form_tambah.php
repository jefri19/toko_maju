<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Tambah</title>
</head>
<body>
       <?php echo form_open_multipart( base_url('tambahBarang'));?>
        <p>Nmama Barang</p>
        <input type="hidden" name="id">
        <input type="text" name="nama" required >
        <p>kategori</p>
        <select type="text" name="kategori" >
            <option value=""></option>
            <option value="snack">Sneck</option>
            <option value="minuman">Minuman</option>
            <option value="bumbu">Bumbu</option>
        </select>
        <p>Harga</p>
        <input type="int" name="harga" required>
        <p>tgl Pengiriman</p>
        <input type="date" name="tgl_kirim" required>
        <p>expiret</p>
        <input type="date" name="expiret" required>
        <p>Stoc</p>
        <input type="text" name="stok" required>
        <p>Uplod Gambar</p>
        <input type="file" name="gambar" >
        <br><br>
        <button type="submit">Tambah Barang</button>

    <?php echo form_close(); ?>
</body>
</html>
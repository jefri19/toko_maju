<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Barang</title>
</head>
<body>       

            <table style="margin-left: auto; margin-right: auto; width: 450px;" >
                <h1 style="text-align: center;"><strong>DETAIL BARANG TOKO MAJU</strong></h1>
                <pre>
                <tr>
                    <th><h3 style="text-align: left;">Nama Barang : </h3></th>
                    <td><strong><?php echo $detail->nama_brg?></strong></td>
                                  
                </tr>
                <tr>
                    <th><h3 style="text-align: left;">Kategori :</h3></th>
                    <td><strong><?php echo $detail->kategori?></strong></td>                 
                </tr>
                <tr>
                    <th><h3 style="text-align: left;">Harga :</h3></th>
                    <td><strong><?php echo $detail->harga?></strong></td>                 
                </tr>
                <tr>
                    <th><h3 style="text-align: left;">tgl Pengiriman :</h3></th>
                    <td><strong><strong><?php echo $detail->tgl_kirim?></strong></td>                 
                </tr>
                <tr>
                    <th><h3 style="text-align: left;">tgl expiret :</h3></th>
                    <td><strong><strong><?php echo $detail->expiret?></strong></td>                 
                </tr>
                <tr>
                    <th><h3 style="text-align: left;">Stok :</h3></th>
                    <td><strong><?php echo $detail->stok?></strong></td>                 
                </tr>
                <tr>
                    <th><h3 style="text-align: left;">gambar :</h3></th>
                    <td><img src=" <?php echo base_url();?>asset/gambar/<?php echo $detail->gambar?>" width="90" height="110"></td>                 
                </tr>
                
                </pre>
            </table>

         << <button><a href="<?php echo base_url();?>">Kembali</a></button>>>
</body>
</html>
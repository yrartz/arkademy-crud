<?php
    include 'data.php';
?>

<html>
    <head>
        <title>Arkademy</title>
        <style>
            h1{
                text-align: center;
                margin: 30px 0;
            }
            
            table{
                border-collapse: collapse;
                text-align: center;
                margin-top: 20px;
            }
            
            a{
                text-decoration: none;
            }
        </style>
    </head>
    <body>
        <h1>Daftar Produk</h1>
        <a href="tambah.php">Tambah Produk</a>
        <table border="1px" cellpadding="10px">
            <tr>
                <th>No</th>
                <th>Nama Produk</th>
                <th>Aksi</th>
            </tr>
            <?php $i=1 ?>
            <?php foreach($result as $r){ ?>
            <tr>
                <td><?php echo $i++?></td>
                <td><?php echo $r['nama_produk']?></td>
                <td>
                    <a href="detail.php?id=<?php echo $r['id'] ?>">Lihat </a>|
                    <a href="update.php?id=<?php echo $r['id']?>">Update </a>|
                    <a href="hapus.php?id=<?php echo $r['id']?>" onclick="return confirm('Yakin mau menghapus <?php echo $r['nama_produk']?>?)">Hapus </a>
                </td>
            </tr>
            <?php } ?>
        </table>
    </body>
</html>
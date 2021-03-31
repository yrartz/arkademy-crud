<?php
    include 'koneksi.php';
    
    $id = $_GET['id'];
    
    $query = "SELECT * FROM produk WHERE id = $id";
    
    $result = mysqli_query($conn, $query);
    
    $data = [];
    
    while($row = mysqli_fetch_assoc($result)){
        $data[] = $row;
    }
    
?>

<html>
    <head>
        <title>Detail Produk</title>
        <style>
            h1{
                text-align: center;
                margin-bottom: 20px;
            }
        </style>
    </head>
    <body>
        <h1>Detail Produk</h1>
        <div>
            <p><b>Nama Produk:</b> <?php echo $data[0]['nama_produk'] ?></p>
            <p><b>Keterangan:</b> <?php echo $data[0]['keterangan']?></p>
            <p><b>Harga:</b> <?php echo number_format($data[0]['harga'])?></p>
            <p><b>Jumlah:</b> <?php echo $data[0]['jumlah']?></p>
        </div>
    </body>
</html>
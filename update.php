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
        <title>Update Produk</title>
        <style>
            h1{
                text-align: center;
                margin-bottom: 20px;
            }
        </style>
    </head>
    <body>
        <h1>Update Produk</h1>
        <form method="post" action="edit.php">
            <input type="hidden" value="<?php echo $data[0]['id']?>" name="id">
            <table>
                <tr>
                    <th>Nama Produk</th>
                    <td>
                        <input type="text" name="nama_produk" value="<?php echo $data[0]['nama_produk']?>" required>
                    </td>
                </tr>
                <tr>
                    <th>Keterangan</th>
                    <td>
                        <textarea cols="22" rows="7" name="keterangan" required><?php echo $data[0]['keterangan']?></textarea>
                    </td>
                </tr>
               <tr>
                    <th>Harga</th>
                    <td>
                        <input type="number" name="harga" value="<?php echo $data[0]['harga']?>" required>
                    </td>
                </tr>
               <tr>
                    <th>Jumlah</th>
                    <td>
                        <input type="number" name="jumlah" value="<?php echo $data[0]['jumlah']?>" required>
                    </td>
                </tr>
               <tr>
                    <th>
                        <button type="submit" name="submit">Update</button>
                    </th>
                </tr>
            </table>
        </form>
    </body>
</html>
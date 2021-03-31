<?php
    include "koneksi.php";
?>

<html>
    <head>
        <title>Tambah Produk</title>
        <style>
            h1{
                text-align: center;
                margin-bottom: 20px;
            }
        </style>
    </head>
    <body>
        <h1>Update Produk</h1>
        <form method="post" action="save.php">
            <table>
                <tr>
                    <th>Nama Produk</th>
                    <td>
                        <input type="text" name="nama_produk" required>
                    </td>
                </tr>
                <tr>
                    <th>Keterangan</th>
                    <td>
                        <textarea cols="22" rows="7" name="keterangan" required></textarea>
                    </td>
                </tr>
               <tr>
                    <th>Harga</th>
                    <td>
                        <input type="number" name="harga" required>
                    </td>
                </tr>
               <tr>
                    <th>Jumlah</th>
                    <td>
                        <input type="number" name="jumlah" required>
                    </td>
                </tr>
               <tr>
                    <th>
                        <button type="submit" name="submit">Save</button>
                    </th>
                </tr>
            </table>
        </form>
    </body>
</html>
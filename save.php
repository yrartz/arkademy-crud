<?php

    include "koneksi.php";
    
    if(isset($_POST['submit'])){
        $nama_produk = $_POST['nama_produk'];
        $keterangan = $_POST['keterangan'];
        $harga = $_POST['harga'];
        $jumlah = $_POST['jumlah'];
        
        $query = "INSERT INTO produk VALUES('', '$nama_produk', '$keterangan', '$harga', '$jumlah')";
        
        mysqli_query($conn, $query);
        
        header('Location:index.php');
    }
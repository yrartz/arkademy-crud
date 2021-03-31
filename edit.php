<?php

    include 'koneksi.php';
    
    if(isset($_POST['submit'])){
    $id = $_POST['id'];
    $nama_produk = $_POST['nama_produk'];
    $keterangan = $_POST['keterangan'];
    $harga = $_POST['harga'];
    $jumlah = $_POST['jumlah'];
    
    $query = "UPDATE produk SET nama_produk = '$nama_produk', keterangan = '$keterangan', harga = $harga, jumlah = $jumlah WHERE id = $id";
    
    mysqli_query($conn, $query);
    
    header('Location:index.php');
    
    }
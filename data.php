<?php

include 'koneksi.php';

$query = "SELECT * FROM produk";

$data = mysqli_query($conn, $query);

$result = [];

while($row = mysqli_fetch_assoc($data)){
    $result[] = $row;
}
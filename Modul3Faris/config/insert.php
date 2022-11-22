<?php
require "connector.php";

function insert($data){
    global $database;
    

    $nama = $data["nama"];
    $pemilik = $data["pemilik"];
    $merk = $data["merk"];
    $tanggal = $data["tanggal"];
    $deskripsi = $data["deskripsi"];
    $foto = $data["foto"];

    $query="INSERT INTO tabelfaris VALUES('', '$nama', '$pemilik', '$merk', '$tanggal', '$deskripsi', '$foto', 'Lunas')";
    mysqli_query($database, $query);
    return mysqli_affected_rows($database);
}
?>
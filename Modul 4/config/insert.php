<?php
require "connector.php";

function insert($data, $foto, $tmp){
    global $database;

    $nama = $data["nama"];
    $pemilik = $data["pemilik"];
    $merk = $data["merk"];
    $tanggal = $data["tanggal"];
    $deskripsi = $data["deskripsi"];
    $status = $data["status"];
    move_uploaded_file($tmp, '../images/'.$foto);
    

    $query="INSERT INTO tabelfaris VALUES('', '$nama', '$pemilik', '$merk', '$tanggal', '$deskripsi', '$foto', '$status[0]')";
    mysqli_query($database, $query);

    return mysqli_affected_rows($database);
}
?>
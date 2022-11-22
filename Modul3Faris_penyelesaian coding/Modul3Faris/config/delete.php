<?php
require "connector.php";

$id = $_GET["id"];

function delete($id){
    global $database;
    global $id;

    $sql = "SELECT * FROM tabelfaris WHERE id_mobil = '$id'";
    $result = mysqli_query($database, $sql);
    $row = mysqli_fetch_assoc($result);
    unlink("../images/".$row["foto_mobil"]);

    $query = "DELETE FROM tabelfaris WHERE id_mobil=$id";
    mysqli_query($database, $query);

    return mysqli_affected_rows($database);
}

if(delete($id)){
    header("Location: ../pages/listCar-faris.php");
    exit;
}

?>   
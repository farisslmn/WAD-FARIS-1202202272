<?php
require "connector.php";

$id = $_GET["id"];

function delete($id){
    global $database;
    global $id;

    $query = "DELETE FROM tabelfaris WHERE id_mobil=$id";
    mysqli_query($database, $query);

    return mysqli_affected_rows($database);
}

if(delete($id)){
    header("Location: ../pages/listCar-faris.php");
    exit;
}

?>   
<?php
$database = mysqli_connect("localhost", "root", "", "wad_modul4_faris", 3306);

function showcar($query)
{
        global $database;
        $datacar = mysqli_query($database, $query);
        $baris = [];

        while ($row = mysqli_fetch_assoc($datacar)){
                $baris[]=$row;
        };

        return $baris;

};

function profile($id)
{
        global $database;

        $query = "SELECT * FROM user_faris WHERE id=$id";
        $dataprofile = mysqli_query($database, $query);
        $baris = [];

        while ($row = mysqli_fetch_assoc($dataprofile)){
                $baris[]=$row;
        };

        return $baris;

};


?>


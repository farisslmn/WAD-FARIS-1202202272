<?php
$database = mysqli_connect("localhost", "root", "", "showroom_faris_table", 3306);

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
?>


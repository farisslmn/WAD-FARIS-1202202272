<?php

function edit($data, $id, $foto, $tmp){
    global $database;

    
    $result =showcar("SELECT * FROM tabelfaris WHERE id_mobil = $id");
    $row = $result[0];
    $path = dirname(__FILE__, 2);

    if($data['nama'] != $row['nama_mobil']){
        $new_nama = $data['nama'];
    }else{
        $new_nama = $row['nama_mobil'];
    }
    if($data['pemilik'] != $row['pemilik_mobil']){
        $new_pemilik = $data['pemilik'];
    }else{
        $new_pemilik = $row['pemilik_mobil'];
    }
    if($data['merk'] != $row['merk_mobil']){
        $new_merk = $data['merk'];
    }else{
        $new_merk = $row['merk_mobil'];
    }
    if($data['tanggal'] != $row['tanggal_beli']){
        $new_tanggal = $data['tanggal'];
    }else{
        $new_tanggal = $row['tanggal_beli'];
    }
    if($data['deskripsi'] != $row['deskripsi']){
        $new_deskripsi = $data['deskripsi'];
    }else{
        $new_deskripsi = $row['deskripsi'];
    }
    if(isset($data['status'])){
    if($data['status'][0] != $row['status_pembayaran']){
        $new_status = $data['status'][0];
    }else{
        $new_status = $row['status_pembayaran'];
    }
    }else{
    $new_status = $row['status_pembayaran'];
    }
    if($foto != null){
        $new_foto = $foto;
        unlink($path."/images/".$row['foto_mobil']);
        move_uploaded_file($tmp, $path."/images/".$new_foto);
    }else{
        $new_foto = $row['foto_mobil'];
    }

    $query = "UPDATE tabelfaris SET nama_mobil='$new_nama', pemilik_mobil='$new_pemilik', merk_mobil='$new_merk', tanggal_beli='$new_tanggal', deskripsi='$new_deskripsi', status_pembayaran='$new_status', foto_mobil='$new_foto' WHERE id_mobil=$id";
    mysqli_query($database, $query);

    return mysqli_affected_rows($database);
}

?>
<?php
require '../config/edit.php';
require '../config/connector.php';

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $query = "SELECT * FROM tabelfaris WHERE id_mobil = $id";
    $result = mysqli_query($database, $query);
    $data = mysqli_fetch_assoc($result);
    $path = dirname(__FILE__, 2);
}

if(isset($_POST['submit'])){
    if($_FILES == null){
        $foto = null;
        $tmp = null;
     } else{
        $foto = $_FILES['foto']['name'];
        $tmp = $_FILES['foto']['tmp_name'];
    }
    edit($_POST, $id, $foto, $tmp);
    header("Location: ./listCar-faris.php");
}
?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <!-- My Css -->
  <link rel="stylesheet" href="../styles/index.css">

  <title>Home</title>
</head>

<body>
  <header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary py-3">
      <div class="container">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" href="home-faris.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="listCar-faris.php">MyCar</a>
            </li>
          </ul>
        </div>
        <div class="add-car">
            <a href="add-faris.php" class="btn btn-light text-primary">Add Car</a>
      </div>
    </nav>
  </header>

  <main>
    <div class="container mt-5">
      <div class="judul">
        <h2><?= $data['nama_mobil'] ?></h2>
        <p>detail mobil <?= $data['nama_mobil'] ?></p>
      </div>
   <main>
    <div class="container mt-5">
      <div class="header">
        <div class="col-lg-6 align-self-center">
          <img src="../images/<?= $data['foto_mobil']?>"width="500" height="500" class="rounded" alt="static car">
        </div>
         </div>
            <div class="row">
            <div class="col-lg-6">
            <form action="" method="POST">
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama Mobil</label>
                    <input type="text" class="form-control" id="nama" name="nama" value="<?= $data['nama_mobil'] ?>">
                </div>
                <div class="mb-3">
                    <label for="pemiliki" class="form-label">Nama Pemilik</label>
                    <input type="text" class="form-control" id="pemilik" name="pemilik" value="<?= $data['pemilik_mobil'] ?>">
                </div>
                <div class="mb-3">
                    <label for="merk" class="form-label">Merk</label>
                    <input type="text" class="form-control" id="merk" name="merk" value="<?= $data['merk_mobil'] ?>">
                </div>
                <div class="mb-3">
                    <label for="tanggal" class="form-label">Tanggal Beli</label>
                    <input type="date" class="form-control" id="tanggal" name="tanggal" value="<?= $data['tanggal_beli'] ?>">
                </div>
                <div class="mb-3">
                    <label for="deskripsi" class="form-label">Deskripsi</label>
                    <input type="text" class="form-control" id="deskripsi" name="deskripsi" value="<?= $data['deskripsi'] ?>">
                </div>
                <div class = "mb-3 d-flex flex-column">
                  <label for="foto" class="form-label">foto</label>
                  <span class='d-flex'>
                    <button class="btn btn-secondary" style="width: 10pc;">
                      Choose File
                    </button>
                    <input type="foto" class="form-control" id="foto" name="foto">
                  </span>
                </div>
                <label for="status" class="form-label">Status Pembayaran</label>
                <div class="d-flex mb-3">
                    <div class="form-check">
                    <input class="form-check-input" type="radio" name="status[]" id="flexRadioDefault1" value='lunas'>
                    <label class="form-check-label" for="flexRadioDefault1">
                        Lunas
                    </label>
                    </div>
                    <div class="form-check ms-2">
                    <input class="form-check-input" type="radio" name="status[]" id="flexRadioDefault2" value='belum lunas'>
                    <label class="form-check-label" for="flexRadioDefault2">
                        Belum Lunas
                    </label>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary" name="submit">Submit</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </main>
</body>
</html>
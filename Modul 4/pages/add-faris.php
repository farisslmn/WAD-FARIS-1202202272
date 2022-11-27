<?php
session_start();
require "../config/insert.php";

if(isset($_SESSION['login'])){
  $idprofile = $_SESSION["id"];
  $dataUser = profile($_SESSION['id'])[0];
}

if(isset($_POST['submit'])){
  $foto = $_FILES['foto']['name'];
  $tmp = $_FILES['foto']['tmp_name'];
  insert($_POST, $foto, $tmp);
  header("Location: ../pages/listcar-faris.php");
}

?>

<!doctype html>
<html lang="en">

<head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="../styles/index.css">

  <title>Home</title>
</head>

<body>
  <header>
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary py-3">
      <div class="container">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" href="Home-faris.php">Home</a>
            </li>
            <?php if (isset($_SESSION['login'])) : ?>
              <li class="nav-item">
                <a class="nav-link" href="listCar-faris.php">MyCar</a>
              </li>
            <?php endif; ?>
          </ul>
        </div>

        <?php if (!isset($_SESSION['login'])) : ?>
          <a href="login-faris.php" class="text-white text-decoration-none">Login</a>

        <?php else : ?>
          <div class="d-flex gap-4">
            <a href="add-faris.php" class="btn btn-light">add car</a>
            <div class="dropdown">
              <a class="btn btn-light dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <?=$dataUser['nama']?>
              </a>

              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="profile-faris.php">Profile</a></li>
                <li><a class="dropdown-item" href="../config/logout.php">Logout</a></li>
              </ul>
            </div>
          </div>
        <?php endif; ?>
      </div>
    </nav>
  </header>

  <main>
    <div class="container mt-5">
      <div class="header">
        <h2>Tambah Mobil</h2>
        <p>Tambah Mobil Baru ke List Show room</p>
         </div>
            <div class="row">
              <div class="col-md-10">
                <form action="" method="POST"  enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama Mobil</label>
                        <input type="text" class="form-control" id="nama" name="nama">
                    </div>
                    <div class="mb-3">
                        <label for="pemiliki" class="form-label">Nama Pemilik</label>
                        <input type="text" class="form-control" id="pemilik" name="pemilik">
                    </div>
                    <div class="mb-3">
                        <label for="merk" class="form-label">Merk</label>
                        <input type="text" class="form-control" id="merk" name="merk">
                    </div>
                    <div class="mb-3">
                        <label for="tanggal" class="form-label">Tanggal Beli</label>
                        <input type="date" class="form-control" id="tanggal" name="tanggal">
                    </div>
                    <div class="mb-3">
                        <label for="deskripsi" class="form-label">Deskripsi</label>
                        <input type="text" class="form-control" id="deskripsi" name="deskripsi">
                    </div>
                    <div class = "mb-3">
                      <label for="foto" class="form-label">foto</label>
                      <input type="file" class="form-control" id="foto" name="foto">
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

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
  </script>
</body>

</html>
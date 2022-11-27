<?php

session_start();

require "../config/connector.php";

if(isset($_SESSION['login'])){
  $idprofile = $_SESSION["id"];
  $dataUser = profile($_SESSION['id'])[0];
}



$datacar = showcar("SELECT * FROM tabelfaris");

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
      <div class="judul">
        <h2>My Showroom</h2>
        <p>List Showroom faris-1202202272</p>
      </div>
      <div class="row gap-4">
        <?php foreach($datacar as $data):?>
          <div class="col-md-5">
            <div class="card">
              <img src="../images/<?= $data['foto_mobil']?>" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title"><?= $data['nama_mobil']?></h5>
                <p class="card-text"><?= $data['deskripsi']?></p>
                
              </div>
              <div class="card-body">
              <div class="row justify-content-center gap-4">
                <!-- <div class="col-md-5">  <button type="button" class="btn btn-primary rounded-pill w-100">Detail</button></div> -->
                <div class="col-md-5"><a href="../pages/detail-faris.php?id=<?=$data['id_mobil']?>"  class= "btn btn-primary rounded-pill w-100">Detail</a></div>
                <div class="col-md-5"><a href="../config/delete.php?id=<?=$data['id_mobil']?>" class="btn btn-danger rounded-pill w-100">Delete</a></div>
              </div>
              
              </div>
            </div>
          </div>
        <?php endforeach;?>
      </div>
    </div>
  </main>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
  </script>
</body>

</html>
<?php
session_start();
require '../config/connector.php';

if(isset($_SESSION['login'])){
  $idprofile = $_SESSION["id"];
  $dataUser = profile($_SESSION['id'])[0];
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
        <h2>Profil</h2>
        <p>Mohon maaf bang bilan aman saya tidak bisa menyelesaikan kodingan ini bang, karana keterbatasannya waktu dan ilmu yang saya miliki bang, mohon maaf banggg
        </p>
      </div>
</body>
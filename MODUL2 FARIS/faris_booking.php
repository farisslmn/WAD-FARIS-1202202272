<?php
if(isset($_GET['name'])and isset($_GET['car'])){
    $name = $_GET['name'];
    $car = $_GET['car'];

    if($car == 'Toyota Alphard'){
        $img = 'alphard.png';
    }elseif($car == 'Mitsubishi Pajero Sport dakar'){
        $img = 'pajero.jpg';
    }elseif($car == 'Honda CR-V Turbo'){
        $img = 'CRV.jpg';
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BookNow</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="collapse navbar-collapse justify-content-center"> >
                <div class="navbar-nav">
                <a class="nav-link" href="faris_home.php"> HOME <span class="sr-only"></span> </a>
                <a class="nav-link" href="faris_booking.php">BOOKING</a>       
                </div>        
            </div>
</nav>
<header id="home" class="py-5">
    <div class="container">
        <h2 class="mb-4 text-center">Reservasi kendaraan EAD</h2>
        <div class="row">
            <div class="col-lg-6 align-self-center">
                <?php if(isset()):?>
                <img class="img-fluid" src="<?=$img?>">
                <?php else:?>
                <img class="img-fluid" src="alphard.jpg">
                <?php endif?>
            </div>
            <div class="col-lg-6">
                <form method="post" action="">
                    <label for="name">Name</label>
                    <input type="text" id="name" class="form-control mb-3" name="name" placeholder="Name" <?php if(isset($name)){echo 'value"'.$name.'"readonly';}?> require>
                    <label for="phone">Phone Number</label>
                    <input type="text" id="phone" class="form-control mb-3" name="phone" placeholder="Phone Number" required>
                    <label for="date">Book Date</label>
                    <input type="date" id="date" class="form-control mb-3" name="date"  required>
                    <label for="time">Start Time</label>
                    <input type="time" id="time" class="form-control mb-3" name="time"  required>
                    <label for="Duration">Duration </label>
                    <input type="number" id="duration" class="form-control mb-3" name="duration" placeholder="Duration"  required>
                    <label for="email">type kendaraan</label>
                    <?php if(isset($car)):?>
                    <input type="text"  class="form-select mb-3" name="car" value="<?=$car?>"?>
                    <?php else:?>
                    <select id="mobil" class="form-select mb-3" name="car">
                        <option value="Alphard">Alphard</option>
                        <option value="Pajero">Pajero</option>
                        <option value="CRV">CRV</option>
                    </select>
                    <?php endif?>
                    <div class="mb-3">
                        <div>Add Extra Service</div>
                        <input id="supir" type="checkbox" name="supir"><label for="supir">supir / Rp.100.000</label><br>
                        <input id="asuransi" type="checkbox" name="asuransi"><label for="asuransi">asuransi / Rp.80.000</label><br>
                        <input id="bensin" type="checkbox" name="bensin"><label for="bensin">Full Tangki / Rp.350.000</label><br>
                    </div>
                    <button type="submit" class="form-control btn btn-warning">Pesan Sekarang</button>
                </form>
            </div>
        </div>
    </div>
    
</body>
</html>
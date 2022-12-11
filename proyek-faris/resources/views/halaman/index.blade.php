@extends('layouts.main')
@section('isi')
<div class="judul">
        <h2>My Showroom</h2>
        <p>List Showroom faris-1202202272</p>
      </div>
      <div class="row gap-4">
        
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
        
      </div>
@endsection
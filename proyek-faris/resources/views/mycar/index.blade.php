@extends('layouts.main')
@section('isi')
<div class="judul">
  <h2>My Showroom</h2>
  <p>List Showroom faris-1202202272</p>
</div>
<div class="row gap-4">
  @foreach ($datacars as $car)
      
  <div class="col-md-5">
    <div class="card">
      <img src="{{ asset('storage/'.$car->image) }}" class="card-img-top" alt="unknown" width = 200px height=300px>
      <div class="card-body">
        <h5 class="card-title">{{$car->name}}</h5>
        <p class="card-text">{{Str::limit($car->description,50)}}</p>
        <p class="card-text"></p>
      </div>
      <div class="card-body">
        <div class="row justify-content-center gap-4">
          <div class="col-md-5"><a href="../pages/detail-faris.php?id="  class= "btn btn-primary rounded-pill w-100">Detail</a></div>
          <div class="col-md-5"><a href="../config/delete.php?id class="btn btn-danger rounded-pill w-100">Delete</a></div>
          </div>    
        </div>
      
    </div>
  </div>
  @endforeach 
        
</div>
@endsection
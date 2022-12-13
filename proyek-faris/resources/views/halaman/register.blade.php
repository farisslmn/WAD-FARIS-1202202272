@extends('layouts.main')
@section('isi')
<div class="row align-items-center">
        <div class="col" style="height:100vh;">
          <img src="../images/fotoregisterlogin.JPG" alt="" height="100%" width="100%">
        </div>
        <div class="col">
          <div class="container">
            <h2 class="fw-bold">Register</h2>

            <form action="/register" method="post">
                @csrf
                <div class="mb-3">
                  <label for="name" class="form-label">nama</label>
                  <input type="text" class="form-control" id="name" name="name">
                </div>


                <div class="mb-3">
                        <label for="no_hp" class="form-label">nomor handphone</label>
                        <input type="number" class="form-control" id="no_hp" name="no_hp">
                </div>
                
                <div class="mb-3">
                  <label for="email" class="form-label">Email</label>
                  <input type="email" class="form-control" id="email" name="email">
                </div>
              <div class="mb-3">
                <label for="password" class="form-label">kata sandi</label>
                <input type="password" class="form-control" id="password" name="password">
              </div>
              
              <input type="submit" class="btn btn-primary" value="Daftar" name="submit">
            </form>
          </div>
        </div>
      </div>
@endsection
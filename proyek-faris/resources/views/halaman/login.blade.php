@extends('layouts.main')
@section('isi')
<div class="row align-items-center">
  <div class="col" style="height:100vh;">
    <img src="../images/fotoregisterlogin.JPG" alt="" height="100%" width="100%">
  </div>
  <div class="col">
    <div class="container">
      <h2 class="fw-bold">Login</h2>

      <form action="/login" method="post">
      @csrf
        
        <div class="mb-3">
          <label for="email" class="form-label">Email</label>
          <input type="email" class="form-control" id="email" name="email">
        </div>
        

  
        <div class="mb-3">
          <label for="password" class="form-label">kata sandi</label>
          <input type="password" class="form-control" id="password" name="password">
        </div>
        

        
        <div class="mb-3 form-check">
          <input type="checkbox" class="form-check-input" id="exampleCheck1">
          <label class="form-check-label" for="exampleCheck1">Remember Me</label>
        </div>
        
        
        <input type="submit" class="btn btn-primary" value="Login" name="submit">
        <p>Anda belum punya akun? <a href="/register">Daftar</a></p>
      </form>
    </div>
  </div>
</div>
@endsection
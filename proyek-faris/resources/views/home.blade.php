@extends('layouts.main')
@section('isi')

    <div class="row align-items-center mt-5">
        <div class="col">
          <h1 class="fw-bold">Selamat Datang Di Show Room paris racing</h1>

          <div class="description">
            <p>menyediakan berbagai macam mobil seken berkualitas dan harga yang bersaing

              dan mohon maaf bang bilamana pada kodingan saya banyak salah, serta masih basic nya kodingan saya, di karnakan saya masih belum mengerti bang, semoga abang selalu di berikan kesehatan dan di mudahkan dalam penyusunan skripsinya bang, aamiinnnn

            </p>
          </div>

          <a href="/mycar" type="button" class="btn btn-primary">MyCar</a>

          <div class="about mt-5">
            <div class="d-flex gap-4">
              <img src="{{ asset('images/logo-ead.png') }}" alt="logo-ead" width="100" height="25">
              <p>faris_1202202272</p>
            </div>
          </div>
        </div>

        <div class="col">
          <img src="{{ asset('images/img_3861.jpg') }}" width="500" height="500" class="rounded" alt="static car">
        </div>
      </div>
@endsection
@extends('layouts.main')
@section('isi')


<main>
  <div class="container mt-5">
    <div class="header">
      <h2>Tambah Mobil</h2>
      <p>Tambah Mobil Baru ke List Show room</p>
       </div>
          <div class="row">
            <div class="col-md-10">
              <form action="/mycar" method="POST"  enctype="multipart/form-data">
                @csrf
                  <div class="mb-3">
                      <label for="nama" class="form-label">Nama Mobil</label>
                      <input type="text" class="form-control" id="nama" name="name">
                  </div>
                  <div class="mb-3">
                      <label for="pemiliki" class="form-label">Nama Pemilik</label>
                      <input type="text" class="form-control" id="pemilik" name="owner">
                  </div>
                  <div class="mb-3">
                      <label for="merk" class="form-label">Merk</label>
                      <input type="text" class="form-control" id="merk" name="brand">
                  </div>
                  <div class="mb-3">
                      <label for="tanggal" class="form-label">Tanggal Beli</label>
                      <input type="date" class="form-control" id="tanggal" name="purchase_date">
                  </div>
                  <div class="mb-3">
                      <label for="deskripsi" class="form-label">Deskripsi</label>
                      <input type="text" class="form-control" id="deskripsi" name="description">
                  </div>
                  <div class = "mb-3">
                    <label for="foto" class="form-label">foto</label>
                    <input type="file" class="form-control" id="foto" name="image">
                  </div>
                  <label for="status" class="form-label">Status Pembayaran</label>
                  <div class="d-flex mb-3">
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="status" id="flexRadioDefault1" value="Lunas" value="Belum-Lunas">
                      <label class="form-check-label" for="flexRadioDefault1">
                        Lunas
                      </label>
                    </div>
                    <div class="form-check ms-2">
                      <input class="form-check-input" type="radio" name="status" id="flexRadioDefault2" value='belum lunas'>
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


@endsection

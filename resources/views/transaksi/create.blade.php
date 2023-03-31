@extends('layouts.master')
@section('title', 'Transaksi')
@section('content')
{{-- <div class="report-card">
    <div class="card">
        <div class="card-body flex flex-col">
<div class="card-body">
    <h5 class="card-title">Form Transaksi Cuci Sepatu</h5>

    <!-- Vertical Form -->
    <form class="row g-3" action="tambah" method="POST">
        @csrf
        <div class="col-12">
            <label for="id_barang" class="form-label">Id Order</label>
            <input type="text" class="form-control" id="id_order" name="id_order">
        </div>
        <div class="col-12">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama">
        </div>
        <div class="col-12">
            <label for="alamat" class="form-label">Alamat</label>
            <input type="text" class="form-control" id="alamat" name="alamat">
        </div>
        <div class="col-12">
            <label for="merk_sepatu" class="form-label">Merk</label>
            <input type="text" class="form-control" id="merk_sepatu" name="merk_sepatu">
        </div>
        <div class="col-12">
            <label for="paket" class="form-label">Paket</label>
            <input type="text" class="form-control" id="paket" name="paket">
        </div>
        <div class="text-center">
            <button type="submit" class="btn btn-primary">Submit</button>

        </div>
    </form><!-- Vertical Form -->
    </div>
    </div>
    </div>

</div> --}}
<p>Form</p>
      <form action='{{ route('transaksi.store') }}' method='post'>
        @csrf
        <div class="my-3 p-3 bg-body rounded shadow-sm">
            <div class="mb-3 row">
                <label for="id" class="col-sm-2 col-form-label">ID</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name='id' id="id">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name='name' id="name">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name='alamat' id="alamat">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="no_hp" class="col-sm-2 col-form-label">Merk Sepatu</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name='merk_sepatu' id="merk_sepatu">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="paket" class="col-sm-2 col-form-label">Paket</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name='paket' id="paket">
                </div>
                <div class="col-sm-10"><button type="submit" class="btn btn-primary" name="submit">SIMPAN</button></div>
            </div>
            <a href='{{ url('transaksi') }}' class="btn btn-secondary"><< kembali</a>
        </div>

     </form>
<!-- AKHIR FORM -->
@endsection


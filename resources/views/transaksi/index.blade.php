@extends('layouts.master')
@section('title', 'Transaksi')
@section('content')

<div class="report-card">
    <div class="card">
        <div class="card-body flex flex-col">
        <div class="flex flex-row justify-between items-center">

</div>

<!-- Table with hoverable rows -->
<div class="container">
    <div class="col-sm-12 col-xl-12">
        <div class="bg-light rounded h-100 p-4">
            <h5 class="card-title">Table</h5>
            <div class="tambah_data"></div>
            <a href="{{ route('transaksi.create') }}" class="btn btn-primary">Tambah Data</a>

            <table class="table table-responsive">
                <thead class="text-left">
                    <tr>
                        <th class="w-1/2 pb-10 text-sm font-extrabold tracking-wide">Id Order</th>
                        <th class="w-1/4 pb-10 text-sm font-extrabold tracking-wide text-right">Nama</th>
                        <th class="w-1/4 pb-10 text-sm font-extrabold tracking-wide text-right">Alamat</th>
                        <th class="w-1/4 pb-10 text-sm font-extrabold tracking-wide text-right">Merk Sepatu</th>
                        <th class="w-1/4 pb-10 text-sm font-extrabold tracking-wide text-right">Paket</th>
                        <th class="w-1/4 pb-10 text-sm font-extrabold tracking-wide text-right">Aksi</th>
                    </tr>
                </thead>
                <tbody class="text-left text-gray-600">
                    @foreach ($transaksis as $transaksi)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{ $transaksi->id_order }}</td>
                            <td>{{ $transaksi->nama }}</td>
                            <td>{{ $transaksi->alamat }}</td>
                            <td>{{ $transaksi->merk_sepatu }}</td>
                            <td>{{ $transaksi->paket }}</td>
                            <td>
                                <button type="button" class="btn btn-success float-right mb-1">Edit</button>
                                <button type="button" class="btn btn-danger float-right mb-1"
                                    onclick="return confirm('Apakah anda benar-benar ingin menghapus ini?')">Hapus</button>
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- End Table with hoverable rows -->

  <!-- bottom -->
  <div class="mt-8">

  </div>
  <!-- end bottom -->

</div>
</div>
</div>
</div>
@endsection

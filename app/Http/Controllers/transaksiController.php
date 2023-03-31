<?php

namespace App\Http\Controllers;

use App\Models\Transaksi;
use Illuminate\Http\Request;

class transaksiController extends Controller
{
    public function index() {
        $transaksis = Transaksi::all();
        return view('transaksi.index', compact('transaksis'));
    }

    public function create()
    {
        return view('transaksi.create');
    }

    public function store(Request $request)
    {
            $data=[
                'id' => $request->id,
                'nama'=>$request->nama,
                'alamat'=>$request->alamat,
                'no_hp'=>$request->merk_sepatu,
                'paket'=>$request->paket,
            ];
            // dd($data);
        Transaksi::create($data);
            // booxing::create($request->except(['_token','submit']));
        return redirect()->to('transaksi')->with('sucess','Berhasil menambahkan data');
    }

    public function show() {
        //
    }

    public function update(){
        $transaksis = Transaksi::all();
        return view('transaksi.edit', compact('transaksis'));
    }

    public function destroy() {
        $transaksis = Transaksi::all();
        return view('transaksi.delete', compact('transaksis'));
    }
}

// <?php

// namespace App\Http\Controllers;

// use App\Models\Peminjaman;
// use Illuminate\Http\Request;

// class PeminjamanController extends Controller
// {
//     /**
//      * Display a listing of the resource.
//      */
//     public function index()
//     {
//         $peminjamans = Peminjaman::all();
//         return view('halaman.data_peminjaman.index', compact('peminjamans'));
//     }

//     /**
//      * Show the form for creating a new resource.
//      */


//     /**
//      * Store a newly created resource in storage.
//      */
//     public function store(Request $request)
//     {
//         $tambahh = Peminjaman::create($request->all());
//         return redirect()->route('halaman.data_peminjaman.index');
//     }

//     /**
//      * Display the specified resource.
//      */
//     public function show(string $id)
//     {
//         //
//     }

//     /**
//      * Show the form for editing the specified resource.
//      */
//     public function edit(Request $request, $id)
//     {
//         $peminjamans = Peminjaman::findOrFail($id);
//         return view('halaman.data_peminjaman.edit', compact('peminjamans'));
//     }

//     /**
//      * Update the specified resource in storage.
//      */
//     public function update($id, Request $request)
//     {
//         $peminjamans = Peminjaman::findOrFail($id);
//         $peminjamans->update($request->all());
//         return redirect()->route('halaman.data_peminjaman.index');
//     }

//     /**
//      * Remove the specified resource from storage.
//      */
//     public function destroy($id)
//     {
//         Peminjaman::where('id', $id)->delete();
//         return redirect()->route('halaman.data_peminjaman.index');
//     }
// }

<?php

namespace App\Http\Controllers\Api;

use App\Models\BarangModel;
use Illuminate\Routing\Controller;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    public function index(){
        return BarangModel::all();
    }

    public function store(Request $request){
        $image = $request->file('image');
        $barang = BarangModel::create([
            'kategori_id' => $request->kategori_id,
            'barang_kode' => $request->barang_kode,
            'barang_nama' => $request->barang_nama,
            'harga_beli' => $request->harga_beli,
            'harga_jual' => $request->harga_jual,
            'image' => $image->hashName(),
        ]);
        return response()->json($barang, 201);
    }

    public function show(BarangModel $barang){
        return BarangModel::find($barang);
    }

    public function update(Request $request, BarangModel $barang){
        $barang->update($request->all());
        return BarangModel::find($barang);
    }

    public function destroy(BarangModel $barang){
        $barang->delete();

        return response()->json([
            'success' => true,
            'message' => 'Data Terhapus',
        ]);
    }
}

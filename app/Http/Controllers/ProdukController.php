<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;

class ProdukController extends Controller
{
    public function create(Request $r)
    {
        $r->validate([
            'nama' => 'required',
            'harga' => 'required|numeric',
            'stok' => 'required|numeric'
        ]);

        return Produk::create($r->only('nama','harga','stok'));
    }

    public function read()
    {
        return Produk::all();
    }

    public function update(Request $r)
    {
        $produk = Produk::findOrFail($r->id);
        $produk->update($r->only('nama','harga','stok'));
        return $produk;
    }

    public function delete(Request $r)
    {
        Produk::destroy($r->id);
        return ['message' => 'Produk berhasil dihapus'];
    }
}

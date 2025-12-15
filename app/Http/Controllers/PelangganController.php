<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pelanggan;

class PelangganController extends Controller
{
    public function create(Request $r)
    {
        $r->validate([
            'nama' => 'required',
            'alamat' => 'required',
            'telepon' => 'required'
        ]);

        return Pelanggan::create($r->only('nama','alamat','telepon'));
    }

    public function read()
    {
        return Pelanggan::all();
    }

    public function update(Request $r)
    {
        $pelanggan = Pelanggan::findOrFail($r->id);
        $pelanggan->update($r->only('nama','alamat','telepon'));
        return $pelanggan;
    }

    public function delete(Request $r)
    {
        Pelanggan::destroy($r->id);
        return ['message' => 'Pelanggan dihapus'];
    }
}

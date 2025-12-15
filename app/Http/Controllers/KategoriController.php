<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kategori;

class KategoriController extends Controller
{
    public function create(Request $r)
    {
        $r->validate(['nama' => 'required']);
        return Kategori::create($r->only('nama'));
    }

    public function read()
    {
        return Kategori::all();
    }

    public function update(Request $r)
    {
        $kategori = Kategori::findOrFail($r->id);
        $kategori->update($r->only('nama'));
        return $kategori;
    }

    public function delete(Request $r)
    {
        Kategori::destroy($r->id);
        return ['message' => 'Kategori dihapus'];
    }
}

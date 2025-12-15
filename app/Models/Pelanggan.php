<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelanggan extends Model
{
    use HasFactory;

    // nama tabel di database
    protected $table = 'pelanggans';

    // field yang boleh diisi (WAJIB agar create/update tidak error)
    protected $fillable = [
        'nama',
        'alamat',
        'telepon'
    ];

    // jika tabel TIDAK punya kolom created_at & updated_at
    // set ke false
    public $timestamps = false;
}

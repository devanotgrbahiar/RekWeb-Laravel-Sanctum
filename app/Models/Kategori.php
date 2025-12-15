<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    use HasFactory;

    // nama tabel di database
    protected $table = 'kategoris';

    // field yang boleh diisi
    protected $fillable = [
        'nama'
    ];

    // nonaktifkan timestamps jika tabel tidak punya kolom timestamp
    public $timestamps = false;
}

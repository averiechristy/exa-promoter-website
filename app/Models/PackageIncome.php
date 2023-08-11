<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PackageIncome extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'judul_paket',
        'deskripsi_paket',
        'nama_produk',
        'qty_produk',
        
    ];
}

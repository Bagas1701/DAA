<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MenuRestoran extends Model
{
    use HasFactory;

    // Menentukan nama tabel jika berbeda
    protected $table = 'menu_restorans';

    // Kolom yang dapat diisi secara mass-assignment
    protected $fillable = [
        'nama_menu',
        'deskripsi',
        'harga',
        'kategori',
        'status',
    ];
}

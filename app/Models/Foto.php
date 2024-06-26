<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Foto extends Model
{
    use HasFactory;
    protected $table = "fotoproduk";
    protected $fillable = ['id_produk', 'photo_name', 'thumbnail'];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bukuapi extends Model
{
    use HasFactory;

    protected $fillable = ['name_buku', 'penerbit', 'tahun_terbit'];
}

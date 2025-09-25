<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengumuman extends Model
{
    use HasFactory;
    protected $table = "pengumumen";
    protected $fillable = [
        'lembaga', 'judul', 'tanggal', 'content', 'created_at', 'updated_at'
    ];
}

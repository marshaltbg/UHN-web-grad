<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mahasiswa extends Model
{
    use HasFactory;
    protected $table = "mahasiswas";
    protected $fillable = [
        'name', 'jenis_kelamin', 'lama_studi', 'fakultas', 'program_studi',  'nim', 
        'ipk', 'umur', 'status_kelulusan','created_at', 'updated_at'
    ];
}

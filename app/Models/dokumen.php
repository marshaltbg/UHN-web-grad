<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dokumen extends Model
{
    use HasFactory;
    protected $table = "dokumens";
    protected $fillable = [
        'artefak','ppkha','sanksos','pernyataan_baaf','foto','nim','created_at', 'updated_at'
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KotakSaran extends Model
{
    protected $table = 'kotak_sarans'; // ✅ HARUS JAMAK

    protected $fillable = [
        'nama',
        'email',
        'pesan',
        'status'
    ];
}

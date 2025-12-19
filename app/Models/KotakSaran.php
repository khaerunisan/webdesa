<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KotakSaran extends Model
{
    protected $table = 'kotak_saran'; // ⬅️ PENTING (SINGULAR)

    protected $fillable = [
        'nama',
        'email',
        'pesan'
    ];
}

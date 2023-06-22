<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Indikator extends Model
{
    use HasFactory;
    protected $table = 'indikator';
    protected $fillable = [
        'tinggi_plastik',
        'tinggi_kertas',
        'tinggi_kaleng',
    ];
}

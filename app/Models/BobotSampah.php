<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BobotSampah extends Model
{
    use HasFactory;
    protected $table = 'bobot_sampah';
    protected $fillable = [
        'tanggal',
        'sampah_plastik',
        'sampah_kertas',
        'sampah_kaleng',
        'total_sampah',
    ];
}

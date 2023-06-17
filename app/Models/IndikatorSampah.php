<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IndikatorSampah extends Model
{
    use HasFactory;
    protected $table = 'indikator_sampah';
    protected $fillable = [
        'tinggi',
        'jenis',
        'lokasi',
    ];

}

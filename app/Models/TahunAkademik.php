<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class TahunAkademik extends Model
{
    use HasFactory;

    protected $table = 'tahun_akademik_';

    protected $primaryKey = 'id_tahun_akademik';

    protected $fillable = [
        'tahun',
        'ganjil_genap',
    ];
}

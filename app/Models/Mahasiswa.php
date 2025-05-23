<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Mahasiswa extends Model
{
    use HasFactory;

    protected $table = 'mahasiswa';

    protected $primaryKey = 'id_mahasiswa';

    protected $fillable = [
        'nim',
        'nama_mahasiswa',
        'no_hp',
        'alamat',
        'tahun_masuk',
        'status_aktif',
    ];


    public function tahunMasuk()
    {
        return $this->belongsTo(TahunAkademik::class, 'tahun_masuk');
    }
}

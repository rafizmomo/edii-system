<?php

namespace App\Models\NE;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Biodata extends Model
{
    use HasFactory;

    protected $table = 'ne_biodata';

    protected $fillable = [
        'user_id',
        'posisi',
        'nama',
        'no_ktp',
        'tempat_lahir',
        'tanggal_lahir',
        'jenis_kelamin',
        'agama',
        'golongan_darah',
        'status',
        'alamat_ktp',
        'alamat_tinggal',
        'email',
        'no_telp',
        'kontak_darurat',
        'keahlian',
        'persetujuan_penempatan',
        'harapan_gaji',
    ];

    public function ne_pendidikan()
    {
        return $this->hasMany(Pendidikan::class, 'ne_biodata_id', 'id');
    }
    public function ne_pekerjaan()
    {
        return $this->hasMany(Pekerjaan::class, 'ne_biodata_id', 'id');
    }
    public function ne_pelatihan()
    {
        return $this->hasMany(Pelatihan::class, 'ne_biodata_id',  'id');
    }
}

<?php

namespace App\Models\NE;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pekerjaan extends Model
{
    use HasFactory;

    protected $table = 'ne_pekerjaan';
    protected $fillable = [
        'ne_biodata_id',
        'nama_perusahaan',
        'posisi_terakhir',
        'pendapatan_terakhir',
        'tahun',
    ];

    public function ne_biodata()
    {
        return $this->belongsTo(Pendidikan::class, 'ne_biodata_id', 'id');
    }
}

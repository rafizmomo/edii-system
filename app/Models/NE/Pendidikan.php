<?php

namespace App\Models\NE;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pendidikan extends Model
{
    use HasFactory;

    protected $table = 'ne_pendidikan';
    protected $fillable = [
        'ne_biodata_id',
        'jenjang_pendidikan_terakhir',
        'nama_instansi',
        'jurusan',
        'tahun_lulus',
        'ipk',

    ];

    public function ne_biodata()
    {
        return  $this->belongsTo(Pendidikan::class, 'ne_biodata_id', 'id');
    }
}

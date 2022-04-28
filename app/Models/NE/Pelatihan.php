<?php

namespace App\Models\NE;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelatihan extends Model
{
    use HasFactory;

    protected $table = 'ne_pelatihan';
    protected $fillable = [
        'ne_biodata_id',
        'nama_kursus',
        'sertifikat',
        'tahun',

    ];

    public function ne_biodata()
    {
        return $this->belongsTo(Pendidikan::class, 'ne_biodata_id', 'id');
    }
}

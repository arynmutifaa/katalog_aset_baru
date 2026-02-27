<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PropertyDetail extends Model
{
    protected $table = 'property_details'; 
    protected $fillable = [
        'nama_gedung',
        'area_id',
        'alamat',
        'luas_tanah',
        'luas_gedung',
        'status_tanah',
        'penggunaan_saat_ini',
        'peruntukan',
        'batas_lahan',
        'properti_sekitar',
        'lebar_jalan',
        'bentuk_lahan',
        'lebar_lahan',
        'kedalaman_lahan',
        'potensi_pengembangan'
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PropertyDetail extends Model
{
    protected $table = 'property_details';

    protected $fillable = [
        'area_id',
        'nama_gedung',
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
        'potensi_pengembangan',
        'jarak_pusat_kota',
        'kondisi_lahan',
        'titik_koordinat',
        'space_idle_gedung',
        'fasilitas',
        'gambar'
    ];

    // supaya kolom gambar otomatis jadi array (JSON)
    protected $casts = [
        'gambar' => 'array',
    ];
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Property;

class PropertySeeder extends Seeder
{
    public function run(): void
    {
        Property::create([
            'nama_gedung' => 'STO ASEM BAGUS',
            'area_id' => 'bangunan',
            'alamat' => 'JL. RAYA ASEM BAGUS DESA GUDANG SITUBONDO',
            'luas_tanah' => '960 m2',
            'luas_gedung' => '215 m2',
            'status_tanah' => 'HAK MILIK',
            'penggunaan_saat_ini' => 'TELKOM',
            'peruntukan' => 'KANTOR KOMERSIAL',
            'batas_lahan' => 'UTARA : PERUMAHAN SELATAN : JALAN RAYA TIMUR : PERTOKOAN BARAT : PERTOKOAN',
            'properti_sekitar' => 'PERKANTORAN, RUKO',
            'lebar_jalan' => '20 m (2 JALUR)',
            'bentuk_lahan' => 'PERSEGI PANJANG',
            'lebar_lahan' => '22 m',
            'kedalaman_lahan' => '10 m',
            'potensi_pengembangan' => 'RETAIL, ATM',
            'jarak_pusat_kota' => '+ 800 M DARI ALUN ALUN ASEMBAGUS',
            'kondisi_lahan' => 'TERDAPAT GEDUNG DAN LAHAN YANG LUAS',
            'titik_koordinat' => '-7.749584363177551, 114.22470680692741',
            'space_idle_gedung' => 'FULL',
            'fasilitas' => 'GENSET DAN AIR PDAM',
        ]);

        Property::create([
            'nama_gedung' => 'EX YAN PANARUKAN',
            'area_id' => 'bangunan',
            'alamat' => 'JL. RAYA PANARUKAN SITUBONDO',
            'luas_tanah' => '330 m2',
            'luas_gedung' => '161 m2',
            'status_tanah' => 'HAK MILIK',
            'penggunaan_saat_ini' => 'KOSONG',
            'peruntukan' => 'RETAIL, PERKANTORAN',
            'batas_lahan' => 'UTARA : PERTOKOAN SELATAN : RUMAH BARAT : INDOMARET TIMUR : PERTOKOAN',
            'properti_sekitar' => 'TANAH KOSONG',
            'lebar_jalan' => '12 m (2 JALUR)',
            'bentuk_lahan' => 'PERSEGI',
            'lebar_lahan' => '15 m',
            'kedalaman_lahan' => '5 m',
            'potensi_pengembangan' => 'ATM, RETAIL, PERKANTORAN',
            'jarak_pusat_kota' => '+ 8 KM DARI ALUN ALUN SITUBONDO',
            'kondisi_lahan' => 'LAHAN KOSONG YANG LUAS',
            'titik_koordinat' => '-7.696641860352068, 113.9399379227899',
            'space_idle_gedung' => '330',
            'fasilitas' => null,
        ]);

        Property::create([
            'nama_gedung' => 'STO MLANDINGAN',
            'area_id' => 'bangunan',
            'alamat' => 'JL. RAYA MLANDINGAN, SITUBONDO',
            'luas_tanah' => '6457 m2',
            'luas_gedung' => '222 m2',
            'status_tanah' => 'HAK MILIK',
            'penggunaan_saat_ini' => 'PERANGKAT',
            'peruntukan' => 'RETAIL, PERKANTORAN',
            'batas_lahan' => 'UTARA : TANAH KOSONG SELATAN : GUDANG BARAT : TANAH KOSONG TIMUR : TANAH KOSONG',
            'properti_sekitar' => 'TANAH KOSONG, PABRIK',
            'lebar_jalan' => '12 m (2 JALUR)',
            'bentuk_lahan' => 'PERSEGI',
            'lebar_lahan' => '20 m',
            'kedalaman_lahan' => '5 m',
            'potensi_pengembangan' => 'ATM, RETAIL, PERKANTORAN',
            'jarak_pusat_kota' => 'LAHAN KOSONG YANG LUAS',
            'kondisi_lahan' => null,
            'titik_koordinat' => '-7.726239369012474, 113.78123669321675',
            'space_idle_gedung' => '124',
            'fasilitas' => 'GENSET, PDAM',
        ]);
    }
}
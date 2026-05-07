<?php

namespace App\Imports;

use App\Models\PropertyDetail;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class PropertyImport implements ToModel, WithHeadingRow
{
    public function model(array $row)
    {
        return new PropertyDetail([
            'nama_gedung'          => $row['nama_gedung'] ?? null,
            'alamat'               => $row['alamat'] ?? null,
            'luas_tanah'           => $row['luas_tanah'] ?? null,
            'luas_gedung'          => $row['luas_gedung'] ?? null,
            'status_tanah'         => $row['status_tanah'] ?? null,
            'penggunaan_saat_ini'  => $row['penggunaan_saat_ini'] ?? null,
            'peruntukan'           => $row['peruntukan'] ?? null,
            'batas_lahan'          => $row['batas_lahan'] ?? null,
            'properti_sekitar'     => $row['properti_sekitar'] ?? null,
            'lebar_jalan'          => $row['lebar_jalan'] ?? null,
            'bentuk_lahan'         => $row['bentuk_lahan'] ?? null,
            'lebar_lahan'          => $row['lebar_lahan'] ?? null,
            'kedalaman_lahan'      => $row['kedalaman_lahan'] ?? null,
            'potensi_pengembangan' => $row['potensi_pengembangan'] ?? null,
            'jarak_pusat_kota'     => $row['jarak_pusat_kota'] ?? null,
            'kondisi_lahan'        => $row['kondisi_lahan'] ?? null,
            'titik_koordinat'      => $row['titik_koordinat'] ?? null,
            'space_idle_gedung'    => $row['space_idle'] ?? null,
            'fasilitas'            => $row['fasilitas'] ?? null,
        ]);
    }
}
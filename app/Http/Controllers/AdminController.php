<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PropertyDetail;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\PropertyImport;

class AdminController extends Controller
{
    public function dashboard(Request $request)
    {
        $query = PropertyDetail::query();

        if ($request->search) {
            $query->where(function ($q) use ($request) {
                $q->where('nama_gedung', 'like', '%' . $request->search . '%')
                    ->orWhere('alamat', 'like', '%' . $request->search . '%');
            });
        }

        if ($request->daerah) {
            if ($request->daerah === 'situbondo_bondowoso') {
                $query->where(function ($q) {
                    $q->where('alamat', 'like', '%situbondo%')
                      ->orWhere('alamat', 'like', '%bondowoso%');
                });
            } elseif ($request->daerah === 'jombang_mojokerto') {
                $query->where(function ($q) {
                    $q->where('alamat', 'like', '%jombang%')
                      ->orWhere('alamat', 'like', '%mojokerto%');
                });
            } else {
                $query->where('alamat', 'like', '%' . $request->daerah . '%');
            }
        }

        $properties = $query->get();

        return view('admin.dashboard', compact('properties'));
    }

    public function importForm()
    {
        return view('admin.property.import');
    }

    public function import(Request $request)
    {
        $request->validate(['file' => 'required|mimes:xlsx,xls,csv']);
        Excel::import(new PropertyImport, $request->file('file'));
        return redirect()->route('admin.dashboard')->with('success', 'Data berhasil diimport!');
    }

    public function downloadTemplate()
    {
        $headers = [
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
            'fasilitas'
        ];

        $callback = function () use ($headers) {
            $file = fopen('php://output', 'w');
            fputcsv($file, $headers);
            fclose($file);
        };

        return response()->stream($callback, 200, [
            'Content-Type' => 'text/csv',
            'Content-Disposition' => 'attachment; filename="template_property.csv"',
        ]);
    }
}
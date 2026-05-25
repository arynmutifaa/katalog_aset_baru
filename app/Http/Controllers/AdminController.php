<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PropertyDetail;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\PropertyImport;
use Maatwebsite\Excel\Concerns\FromArray;

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
        $request->validate([
            'file' => 'required|mimes:xlsx,xls,csv'
        ]);

        Excel::import(new PropertyImport, $request->file('file'));

        return redirect()->route('admin.dashboard')
            ->with('success', 'Data berhasil diimport!');
    }

    public function downloadTemplate()
    {
        $data = [
            [
                'nama_gedung',
                'area_id',
                'alamat',
                'luas_tanah',
                'luas_gedung',
                'status_tanah',
                'penggunaan_saat_ini',
                'properti_sekitar',
                'lebar_jalan',
                'potensi_pengembangan',
                'jarak_pusat_kota',
                'titik_koordinat',
                'space_idle_gedung',
                'fasilitas'
            ]
        ];

        return Excel::download(new class($data) implements FromArray
        {
            protected $data;

            public function __construct(array $data)
            {
                $this->data = $data;
            }

            public function array(): array
            {
                return $this->data;
            }
        }, 'template_property.xlsx');
    }
}
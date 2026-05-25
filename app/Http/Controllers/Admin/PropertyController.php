<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PropertyDetail;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\PropertyImport;
use Barryvdh\DomPDF\Facade\Pdf;

class PropertyController extends Controller
{
    public function index()
    {
        $properties = PropertyDetail::all();
        return view('admin.dashboard', compact('properties'));
    }

    public function show($id)
    {
        $property = PropertyDetail::findOrFail($id);
        return view('admin.property-detail', compact('property'));
    }

    public function create()
    {
        return view('admin.property.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_gedung' => 'required',
            'alamat' => 'required',
            'gambar.*' => 'image|mimes:jpg,jpeg,png|max:2048'
        ]);

        $property = new PropertyDetail();
        $property->area_id = $request->area_id;
        $property->nama_gedung = $request->nama_gedung;
        $property->alamat = $request->alamat;
        $property->luas_tanah = $request->luas_tanah;
        $property->luas_gedung = $request->luas_gedung;
        $property->status_tanah = $request->status_tanah;
        $property->penggunaan_saat_ini = $request->penggunaan_saat_ini;
        $property->properti_sekitar = $request->properti_sekitar;
        $property->lebar_jalan = $request->lebar_jalan;
        $property->potensi_pengembangan = $request->potensi_pengembangan;
        $property->jarak_pusat_kota = $request->jarak_pusat_kota;
        $property->titik_koordinat = $request->titik_koordinat;
        $property->space_idle_gedung = $request->space_idle_gedung;
        $property->fasilitas = $request->fasilitas;

        if ($request->hasFile('gambar')) {
            $images = [];
            foreach ($request->file('gambar') as $file) {
                $images[] = $file->store('properties', 'public');
            }
            $property->gambar = json_encode($images);
        }

        $property->save();

        return redirect()->route('admin.property.index')
            ->with('success', 'Property berhasil ditambahkan');
    }

    public function edit($id)
    {
        $property = PropertyDetail::findOrFail($id);
        return view('admin.property.edit', compact('property'));
    }

    public function update(Request $request, $id)
    {
        $property = PropertyDetail::findOrFail($id);

        $request->validate([
            'nama_gedung' => 'required',
            'alamat' => 'required',
            'gambar.*' => 'image|mimes:jpg,jpeg,png|max:2048'
        ]);

        $property->area_id = $request->area_id;
        $property->nama_gedung = $request->nama_gedung;
        $property->alamat = $request->alamat;
        $property->luas_tanah = $request->luas_tanah;
        $property->luas_gedung = $request->luas_gedung;
        $property->status_tanah = $request->status_tanah;
        $property->penggunaan_saat_ini = $request->penggunaan_saat_ini;
        $property->properti_sekitar = $request->properti_sekitar;
        $property->lebar_jalan = $request->lebar_jalan;
        $property->potensi_pengembangan = $request->potensi_pengembangan;
        $property->jarak_pusat_kota = $request->jarak_pusat_kota;
        $property->titik_koordinat = $request->titik_koordinat;
        $property->space_idle_gedung = $request->space_idle_gedung;
        $property->fasilitas = $request->fasilitas;

        if ($request->hasFile('gambar')) {
            $images = [];
            foreach ($request->file('gambar') as $file) {
                $images[] = $file->store('properties', 'public');
            }
            $property->gambar = json_encode($images);
        }

        $property->save();

        return redirect()->route('admin.property.index')
            ->with('success', 'Property berhasil diupdate');
    }

    public function destroy($id)
    {
        PropertyDetail::destroy($id);
        return redirect()->route('admin.property.index');
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
];

        $callback = function() use ($headers) {
            $file = fopen('php://output', 'w');
            fputcsv($file, $headers);
            fclose($file);
        };

        return response()->stream($callback, 200, [
            'Content-Type' => 'text/csv',
            'Content-Disposition' => 'attachment; filename="template_property.csv"',
        ]);
    }
    public function exportPdf($id)
{
    $property = PropertyDetail::findOrFail($id);

    $pdf = Pdf::loadView('admin.property.export-pdf', compact('property'))
        ->setPaper('a4', 'portrait')
        ->setOption([
            'isRemoteEnabled' => true,
            'isHtml5ParserEnabled' => true,
        ]);

    $filename = 'aset-' . str($property->nama_gedung)->slug() . '.pdf';

    return $pdf->download($filename);
}
}
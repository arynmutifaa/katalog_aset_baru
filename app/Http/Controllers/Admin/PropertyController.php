<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PropertyDetail;
use Illuminate\Http\Request;

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
        $property->peruntukan = $request->peruntukan;
        $property->batas_lahan = $request->batas_lahan;
        $property->properti_sekitar = $request->properti_sekitar;
        $property->lebar_jalan = $request->lebar_jalan;
        $property->bentuk_lahan = $request->bentuk_lahan;
        $property->lebar_lahan = $request->lebar_lahan;
        $property->kedalaman_lahan = $request->kedalaman_lahan;
        $property->potensi_pengembangan = $request->potensi_pengembangan;
        $property->jarak_pusat_kota = $request->jarak_pusat_kota;
        $property->kondisi_lahan = $request->kondisi_lahan;
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
        $property->peruntukan = $request->peruntukan;
        $property->batas_lahan = $request->batas_lahan;
        $property->properti_sekitar = $request->properti_sekitar;
        $property->lebar_jalan = $request->lebar_jalan;
        $property->bentuk_lahan = $request->bentuk_lahan;
        $property->lebar_lahan = $request->lebar_lahan;
        $property->kedalaman_lahan = $request->kedalaman_lahan;
        $property->potensi_pengembangan = $request->potensi_pengembangan;
        $property->jarak_pusat_kota = $request->jarak_pusat_kota;
        $property->kondisi_lahan = $request->kondisi_lahan;
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
}

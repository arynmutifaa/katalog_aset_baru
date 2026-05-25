<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PropertyDetail;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\PropertyImport;


class PropertyController extends Controller
{
    public function index(Request $request)
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

        return view('dashboard', compact('properties'));
    }

    public function show($id)
    {
        $property = PropertyDetail::findOrFail($id);
        return view('property-detail', compact('property'));
    }
    public function importForm()
    {
        return view('property.import');
    }

}

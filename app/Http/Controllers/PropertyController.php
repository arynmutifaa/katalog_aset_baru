<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PropertyDetail;

class PropertyController extends Controller
{
    public function index(Request $request)
    {
        $query = PropertyDetail::query();

        // Search lokasi
        if ($request->search) {
            $query->where('alamat', 'like', '%' . $request->search . '%');
        }

        // Filter daerah
        if ($request->daerah) {
            $query->where('alamat', 'like', '%' . $request->daerah . '%');
        }

        $properties = $query->get();

        return view('dashboard', compact('properties'));
    }

    public function show($id)
    {
        $property = PropertyDetail::findOrFail($id);
        return view('property-detail', compact('property'));
    }
}
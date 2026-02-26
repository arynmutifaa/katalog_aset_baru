<?php

namespace App\Http\Controllers;

use App\Models\PropertyDetail;

class PropertyController extends Controller
{
    public function index()
    {
        $properties = PropertyDetail::all();
        return view('dashboard', compact('properties'));
    }

    public function show($id)
    {
        $property = PropertyDetail::findOrFail($id);
        return view('property-detail', compact('property'));
    }
}

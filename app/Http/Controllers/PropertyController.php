<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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

    public function dashboard()
    {
        $properties = PropertyDetail::all();
        return view('dashboard', compact('properties'));
    }

    public function AdminDashboard()
    {
        $properties = PropertyDetail::all();
        return view('admin.dashboard', compact('properties'));
    }

    public function create()
    {
        return view('property.create');
    }

    public function store(Request $request)
    {
        PropertyDetail::create($request->all());

        return redirect()->route('admin.dashboard')
            ->with('success', 'Data berhasil ditambahkan');
    }

    public function edit($id)
    {
        $property = PropertyDetail::findOrFail($id);
        return view('property.edit', compact('property'));
    }

    public function update(Request $request, $id)
    {
        $property = PropertyDetail::findOrFail($id);
        $property->update($request->all());

        return redirect()->route('admin.dashboard')
            ->with('success', 'Data berhasil diperbarui');
    }

    public function destroy($id)
    {
        $property = PropertyDetail::findOrFail($id);
        $property->delete();

        return redirect()->route('admin.dashboard')
            ->with('success', 'Data berhasil dihapus');
    }
}
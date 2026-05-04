<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PropertyDetail;

class AdminController extends Controller
{
    public function dashboard(Request $request)
    {
        $query = PropertyDetail::query();

        if ($request->filled('search')) {
            $query->where(function ($q) use ($request) {
                $q->where('nama_gedung', 'like', '%' . $request->search . '%')
                    ->orWhere('alamat', 'like', '%' . $request->search . '%');
            });
        }

        if ($request->filled('daerah')) {
            $query->where('alamat', $request->daerah);
        }

        $properties = $query->get();

        return view('admin.dashboard', compact('properties'));
    }
}

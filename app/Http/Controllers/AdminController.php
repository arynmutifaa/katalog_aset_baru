<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PropertyDetail;

class AdminController extends Controller
{
    public function dashboard(Request $request)
    {
        $query = PropertyDetail::query();

        if ($request->search) {
            $query->where('alamat','like','%'.$request->search.'%');
        }

        if ($request->daerah) {
            $query->where('alamat','like','%'.$request->daerah.'%');
        }

        $properties = $query->get();

        return view('admin.dashboard', compact('properties'));
    }
}
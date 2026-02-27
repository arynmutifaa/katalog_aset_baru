<?php

namespace App\Http\Controllers;

use App\Models\PropertyDetail;

class AdminController extends Controller
{
    public function dashboard()
    {
        $properties = PropertyDetail::all();
        return view('admin.dashboard', compact('properties'));
    }
}

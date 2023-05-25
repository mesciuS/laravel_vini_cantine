<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Wine;
use Illuminate\Http\Request;

class WineControlController extends Controller
{
    public function home() {
        $wines = Wine::all();

        return view('admin.wine-control', compact('wines'));
    }
}


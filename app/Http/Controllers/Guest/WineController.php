<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Wine;
use Illuminate\Http\Request;

class WineController extends Controller
{
    public function index() {
        $wines = Wine::all();
        // dd($wines);
        return view('wine', compact('wines'));
    }
}

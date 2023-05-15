<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Wineyard;
use Illuminate\Http\Request;

class WineyardController extends Controller
{
    public function index() {
        $wineyards = Wineyard::all();
        // dd($wines);
        return view('wineyard', compact('wineyards'));
    }
}

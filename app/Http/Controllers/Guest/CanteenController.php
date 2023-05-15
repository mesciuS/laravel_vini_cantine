<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Canteen;
use Illuminate\Http\Request;

class CanteenController extends Controller
{
    public function index() {
        $canteens = Canteen::all();
        // dd($wines);
        return view('canteen', compact('canteens'));
    }
}

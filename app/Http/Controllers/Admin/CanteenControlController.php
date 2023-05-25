<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Canteen;

use Illuminate\Http\Request;

class CanteenControlController extends Controller
{
    public function home() {
        $canteens = Canteen::all();

        return view('admin.canteen-control', compact('canteens'));
    }
}


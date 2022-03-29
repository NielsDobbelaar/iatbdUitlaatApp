<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DierController extends Controller
{

    public function index()
    {
        return view('dieren.index' ,[ 'dieren' => \App\Models\Dier::all()]);;
    }
}

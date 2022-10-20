<?php

namespace App\Http\Controllers;

use App\Models\Cargo;
use Illuminate\Http\Request;

class CargoController extends Controller
{
    public function index()
    {
        $cargos = Cargo::all();
        $totalCargos = Cargo::all()->count();
        return view('cargos.index', compact('cargos', 'totalCargos'));
    }

    public function create()
    {

        return view('cargos.create');
    }
}

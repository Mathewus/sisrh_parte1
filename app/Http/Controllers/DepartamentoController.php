<?php

namespace App\Http\Controllers;

use App\Models\Departamento;
use Illuminate\Http\Request;

class DepartamentoController extends Controller
{
    public function index()
    {
        $departamentos = Departamento::all();
        $totalDepartamentos = Departamento::all()->count();
        return view('departamentos.index', compact('departamentos', 'totalDepartamentos'));
    }

    public function create()
    {

        return view('departamentos.create');
    }
}

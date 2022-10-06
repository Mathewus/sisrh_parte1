<?php

namespace App\Http\Controllers;

use App\Models\Funcionario;
use Illuminate\Http\Request;

class FuncionarioController extends Controller
{
    public function index()
    {
        $funcionarios = Funcionario::all();
        //dd($funcionarios);
        return view('funcionarios.index', compact('funcionarios'));
    }

    public function create()
    {

        return view('funcionarios.create');
    }
}

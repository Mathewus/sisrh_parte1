@extends('layouts.default')

@section('title', 'Cadastrar Departamento')

@section('conteudo')

<div class="container shadow bg-white pb-1 px-4" style="width:1150px; margin-top:-35px;">

    <h1 class="pt-3 mb-4">Cadastrar Departamento</h1>

        <div class=" pt-3 mb-4">
            <label for="nome" class="form-label">Nome</label>
            <input type="text" name="nome" class="form-control form-control-lg bg-light" 
            value="" required>
        </div>

        <div class="row">
        <div class="mb-3 col-sm-1" style="margin-right: 3px;">
            <button type="submit" class="btn btn-primary" name="cadastrar">Cadastrar</button>
        </div>
        <div class="col-sm-1">
            <button type="submit" class="btn btn-danger" name="cancelar">Cancelar</button>
        </div>
    </div>
</div>
@endsection
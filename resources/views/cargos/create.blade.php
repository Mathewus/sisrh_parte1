@extends('layouts.default')

@section('title', 'Cadastrar Cargo')

@section('conteudo')

    <div class="container shadow bg-white pb-1 px-4" style="width:1150px; margin-top:-35px;">

        <h1 class="pt-3 mb-4">Cadastrar Cargo</h1>

        <form method="POST" action="{{ route('cargos.store') }}" enctype="multipart/form-data">

            @csrf
            <input type="hidden" value="1" name="id">
            <div class=" pt-3 mb-4">
                <label for="descricao" class="form-label">Descrição</label>
                <input type="text" name="descricao" class="form-control form-control-lg bg-light" value=""
                    required>
            </div>

            <div class="row">
                <div class="mb-3 col-sm-1" style="margin-right: 3px;">
                    <button type="submit" class="btn btn-primary" name="cadastrar">Cadastrar</button>
                </div>
                <div class="col-sm-1">
                    <a href="{{ route('cargos.index') }}" class="btn btn-danger">Cancelar</a>
                </div>
            </div>

        </form>
    </div>
@endsection

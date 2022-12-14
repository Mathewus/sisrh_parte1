@extends('layouts.default')

@section('title', 'Alterar Funcionário')

@section('conteudo')

    <div class="container shadow bg-white pb-1 px-4" style="width:1150px; margin-top:-35px;">

        <h1 class="pt-3 mb-4">Alterar Funcionário</h1>

        <form method="POST" action="{{ route('funcionarios.update' , $funcionario->id)}}" enctype="multipart/form-data">

            @csrf
            @method('PUT')
            <input type="hidden" value="1" name="id_user">
            <div class="row pt-3">
                <div class="mb-3 col-sm-4">
                    <label for="nome" class="form-label">Nome</label>
                    <input type="text" name="nome" class="form-control form-control-lg bg-light" value="{{$funcionario->nome}}"
                        required>
                </div>
                <div class="mb-3 col-sm-4">
                    <label for="data_nasc" class="form-label">Data de Nascimento</label>
                    <input type="date" name="data_nasc" class="form-control form-control-lg bg-light" value="{{$funcionario->data_nasc}}"
                        required>
                </div>
                <div class="mb-3 col-sm-4">
                    <label for="sexo" class="form-label">Sexo</label>
                    <select name="sexo" class="form-select form-select-lg bg-light" value="" required>
                        <option value="">--</option>
                        <option value="m"@selected($funcionario->sexo == 'm')>Masculino</option>
                        <option value="f"@selected($funcionario->sexo == 'f')>Feminino</option>
                    </select>
                </div>


                <div class="mb-3 col-sm-4">
                    <label for="cpf" class="form-label">CPF</label>
                    <input type="text" name="cpf" class="form-control form-control-lg bg-light" value="{{$funcionario->cpf}}"
                        required>
                </div>
                <div class="mb-3 col-sm-4">
                    <label for="email" class="form-label">E-mail</label>
                    <input type="email" name="email" class="form-control form-control-lg bg-light" value="{{$funcionario->email}}"
                        required>
                </div>
                <div class="mb-3 col-sm-4">
                    <label for="telefone" class="form-label">Telefone</label>
                    <input type="tel" name="telefone" placeholder="(DDD) XXXXX-XXXX"
                        class="form-control form-control-lg bg-light" value="{{$funcionario->telefone}}" required>
                </div>


                <div class="mb-3 col-sm-4">
                    <label for="id_departamento" class="form-label">Departamento</label>
                    <select name="id_departamento" class="form-select form-select-lg bg-light" value="" required>
                        <option value=""></option>
                        @foreach ($departamentos as $departamento)
                            <option value="{{ $departamento->id }}" @selected($departamento->id == $funcionario->id_departamento)>{{ $departamento->nome }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3 col-sm-4">
                    <label for="id_cargo" class="form-label">Cargo</label>
                    <select name="id_cargo" class="form-select form-select-lg bg-light" value="" required>
                        <option value=""></option>
                        @foreach ($cargos as $cargo)
                            <option value="{{ $cargo->id }}"  @selected($cargo->id == $funcionario->id_cargo)>{{ $cargo->descricao }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3 col-sm-4">
                    <label for="salario" class="form-label">Salário</label>
                    <input type="number" name="salario" placeholder="R$" class="form-control form-control-lg bg-light"
                    value="{{$funcionario->salario}}" required>
                </div>

                <div class="col-md-2">
                    <img src="/storage/funcionarios/{{$funcionario->foto}}" class="img-thumbnail" alt="">
                </div>
                <div class="col-md-10">
                    <label for="foto" class="form-label">Foto</label>
                    <input type="file" name="foto" class="form-control form-control-lg bg-light" value="">
                </div>
            </div>
            <div class="pt-2 row">
                <div class="mb-3 col-sm-1" style="margin-right: -17px;">
                    <button type="submit" class="btn btn-primary" name="alterar">Alterar</button>
                </div>
                <div class="col-sm-1">
                    <a href="{{route('funcionarios.index')}}" class="btn btn-danger">Cancelar</a>
                </div>
            </div>

        </form>
    </div>
@endsection

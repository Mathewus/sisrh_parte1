@extends('layouts.default')

@section('title', 'Funcionários')

@section('conteudo')

    <div class="container shadow bg-white pb-3 px-4" style="width:1150px; margin-top:-35px;">

        <h1 class="pt-4 mb-2">Funcionários</h1>
        <a href="{{ route('funcionarios.create') }}" class="btn btn-primary float-end mb-2 rounded-circle fs-4"><i
                class="bi bi-person-plus-fill"></i></a>
        <table class="table table-striped text-center">
            
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Fotos</th>
                    <th>Nome</th>
                    <th>Cargo</th>
                    <th>Departamento</th>
                    <th>Ação</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($funcionarios as $funcionario)
                    <tr>
                        <td class="align-middle">{{ $funcionario->id }}</td>
                        <td><img src="/images/funcionarios/{{ $funcionario->foto }}" alt="{{ $funcionario->nome }}"
                                width="100"></td>
                        <td class="align-middle">{{ $funcionario->nome }}</td>
                        <td class="align-middle">{{ $funcionario->cargo->descricao }}</td>
                        <td class="align-middle">{{ $funcionario->departamento->nome }}</td>
                        <td class="align-middle"><i class="bi bi-pen btn btn-primary"></i>
                            <i class="bi bi-trash btn btn-danger"></i>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection

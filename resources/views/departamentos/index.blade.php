@extends('layouts.default')

@section('title', 'Departamentos')

@section('conteudo')

    <div class="container shadow bg-white pb-3 px-4" style="width:1150px; margin-top:-35px;">

        <h1 class="pt-4 mb-2">Departamentos</h1>
        <a href="{{ route('departamentos.create') }}" class="btn btn-primary float-end mb-2 rounded-circle fs-4"><i
                class="bi bi-plus"></i></a>
        <table class="table table-striped text-center">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th class="col-md-2">Ação</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($departamentos as $departamento)
                    <tr>
                        <td class="pt-3">{{ $departamento->id }}</td>
                        <td class="pt-3">{{ $departamento->nome }}</td>
                        <td><i class="bi bi-person btn btn-success"></i>
                            <i class="bi bi-pen btn btn-primary"></i>
                            <i class="bi bi-trash btn btn-danger"></i>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection

@extends('layouts.default')

@section('title', 'Cargos')

@section('conteudo')

    <div class="container shadow-sm position-relative bg-white pb-3 px-4" style="width:1150px; margin-top:-35px;">

        <h1 class="pt-4 mb-4">Cargos</h1>
        <a href="{{ route('cargos.create') }}" class="btn btn-primary position-absolute top-0 end-0 m-4 rounded-circle fs-4"><i
                class="bi bi-plus"></i></a>

                <p>Total de Cargos: {{ $totalCargos}}</p>

                <form action="" method="get" class="mb-3 d-flex justify-content-end">

                    <div class="input-group me-3">
                        <input type="text" name="buscaFuncionario" class="form-control form-control-lg" 
                        placeholder="Nome do cargo">
                        <button class="btn btn-primary btn-lg" type="submit">Procurar</button>
                    </div>
                    <a href="" class="btn btn-light border btn-lg">Limpar</a>
                </form>

                <div class="table-responsive">
        <table class="table table-striped text-center">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Descrição</th>
                    <th class="col-md-2">Ação</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($cargos as $cargo)
                    <tr>
                        <td class="align-middle">{{ $cargo->id }}</td>
                        <td class="align-middle">{{ $cargo->descricao }}</td>
                        <td class="align-middle"><i class="bi bi-person btn btn-success"></i>
                            <i class="bi bi-pen btn btn-primary"></i>
                            <i class="bi bi-trash btn btn-danger"></i>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    </div>
@endsection

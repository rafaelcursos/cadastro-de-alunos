@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                @if (session('msg'))
                    <div class="alert alert-success" role="alert">
                        {{ session('msg') }}
                    </div>
                @endif
            </div>
        </div>
        <div class="row mb-5">
            <div class="col-12 d-flex justify-content-space-between">

                <div>
                    <h1>Todos os alunos</h1>
                </div>
                <div class="m-auto"><a href="/aluno/criar" class="btn btn-primary">Novo Aluno</a></div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <table class="table table-striped border">
                    <thead>
                        <tr>
                            <th>Aluno</th>
                            <th>Telefone</th>
                            <th>Ver</th>
                            <th>Pagar</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($alunos as $aluno)
                            <tr>
                                <td>
                                    <img width="100" class="img-fluid" src="{{ Storage::url($aluno->imagem) }}"
                                        alt="{{ $aluno->nome }}">

                                    <p>{{ $aluno->nome }}</p>
                                </td>
                                <td>{{ $aluno->telefone }}</td>
                                <td>
                                    <a href="/aluno/ver/{{ $aluno->id }}" class="btn btn-primary">Ver Aluno</a>
                                </td>
                                <td>
                                    <a href="/aluno/pagar/{{ $aluno->id }}" class="btn btn-success">Pagar</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

    </div>
@endsection

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

                <div><h1>Todos os cursos</h1></div>
                <div class="m-auto"><a href="/curso/criar" class="btn btn-primary">Novo Curso</a></div>                
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <table class="table table-striped border">
                    <thead>
                        <tr>
                            <th>Curso</th>
                            <th>Descrição</th>
                            <th>Editar</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($cursos as $curso)
                        <tr>
                            <td>
                                <img width="100" class="img-fluid" src="{{Storage::url($curso->imagem)}}" alt="{{$curso->curso}}">
                                <p>{{$curso->curso}}</p>
                            </td>
                            <td>{{$curso->descricao}}</td>
                            <td>
                                <a href="/curso/ver/{{$curso->id}}" class="btn btn-primary">Editar</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

    </div>
@endsection

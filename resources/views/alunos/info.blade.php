@extends('layouts.app')

@section('content')
<div class="container">

    <div class="row">
        <div class="col-12">
            @if (session('msg'))
            <div class="alert alert-success" role="alert">
                {{ session('msg') }}
            </div>
        @endif
        </div>
    </div>

    <div class="row">
        <div class="col-12 d-flex justify-content-end">
            <button class="btn" onclick="window.print()">Imprimir</button>
        </div>
        <div class="col-12">
            <div  class="text-center">
                <h1>{{$aluno->nome}}</h1>
            </div>
            <div class="row">
                <div id="img-modal" class="col-12"> <img src="{{Storage::url($aluno->imagem)}}" alt="{{$aluno->nome}}"> </div>
                <div class="col-6">
                    <div> <img onclick="mostrafoto();" style="cursor: pointer;" width="100" class="img-fluid" src="{{Storage::url($aluno->imagem)}}" alt="{{$aluno->nome}}"> </div>
                </div>
                <div class="col-6">
                    <div class="d-flex justify-content-end align-items-center">
                        <a href="/home" class="btn btn-secondary m-1">Voltar</a>
                        <a href="/alunos/update/{{$aluno->id}}" class="btn btn-primary m-1">Editar</a>
                        <form action="/alunos/delete/{{$aluno->id}}" method="post" class="form-group">
                            @csrf
                            @method('delete')
                            <button onclick="return confirm('Deseja realmente excluir o aluno?')" class="btn btn-danger" type="submit">Deletar</button>
                        </form>
                    </div>
                </div>
            </div>
            <hr style="border: 5px double rgb(20, 97, 180)">
            <h3 class="text-center"><i>Dados do Aluno</i></h3>
            <hr style="border: 5px double rgb(20, 97, 180)">
        </div>
    </div>
    <div class="row">
        <div style="border-left: 10px double #4a82bd" class="col-md-6">
            <h3 class="mb-3"><u>Informa????es Pessoais</u></h3>

            <p><strong>Telefone:</strong> {{$aluno->telefone}}</p>
            <p><strong>Respons??vel:</strong> {{$aluno->responsavel}}</p>
            <p><strong>Data de Nascimento:</strong> {{$aluno->nascimento}}</p>
            <p><strong>Rua:</strong> {{$aluno->rua}}</p>
            <p><strong>Bairro:</strong> {{$aluno->bairro}}</p>
            <p><strong>N??mero:</strong> {{$aluno->numero}}</p>
            <p><strong>Cidade:</strong> {{$aluno->cidade}}</p>
            <p><strong>E-mail:</strong> {{$aluno->email}}</p>
            <p><strong>Instagram:</strong> {{$aluno->instagram}}</p>
        </div>
        <div style="border-left: 10px double #4a82bd" class="col-md-6">
            <h3 class="mb-3"><u>Cursos Cadastrados</u></h3>
            <ul>
                @foreach($cursos as $curso)
                    <li style="list-style-type: square; font-size: 1rem; border-left: 1px solid #4a82bd; padding-left: 1rem;">{{$curso->curso}}</li>
                @endforeach
            </ul>

        </div>
    </div>
</div>
@endsection
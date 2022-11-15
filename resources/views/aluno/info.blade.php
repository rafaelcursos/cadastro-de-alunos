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
        <div class="col-md-6">
            <div> <img width="100" class="img-fluid" src="{{Storage::url($aluno->imagem)}}" alt="{{$aluno->nome}}"> </div>
            <div> <h5>{{$aluno->nome}}</h5> </div>
            <hr>
            <strong>Telefone:</strong> {{$aluno->telefone}}<br>
            <strong>Rua:</strong> {{$aluno->rua}}<br>
            <strong>Bairro:</strong> {{$aluno->bairro}}<br>
            <strong>Número:</strong> {{$aluno->numero}}<br>
            <strong>Cidade:</strong> {{$aluno->cidade}}<br>
            <strong>E-mail:</strong> {{$aluno->email}}<br>
            <strong>Instagram:</strong> {{$aluno->instagram}}<br>
        </div>
        <div class="col-md-6">
            @foreach ($mensalidades as $m)
                
            @endforeach
        </div>
    </div>
</div>
@endsection
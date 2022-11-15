@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6 m-auto">
            <h3>Escolha um curso</h3>
            <h5>Para o aluno: {{$aluno->nome}}</h5>
            <form action="/curso_aluno/{{$aluno->id}}" method="post" class="form-group">
                @csrf
                <select name="curso" id="curso" class="form-select">
                    @foreach($cursos as $curso)
                    <option value="{{$curso->id}}">{{$curso->curso}}</option>
                    @endforeach
                </select>
                <br>
                <input class="btn btn-primary" type="submit" value="Enviar">
            </form>
        </div>
    </div>
</div>
@endsection
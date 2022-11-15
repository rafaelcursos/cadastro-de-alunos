@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6 m-auto">
            <h3>Escolha o horario do seu curso</h3>
            <h5>{{$aluno->nome}}</h5>
            <form action="/horario_aluno/{{$aluno->id}}" method="post" class="form-group">
                @csrf
                <select name="horario" id="horario" class="form-select">
                    @foreach($horarios as $horario)
                    <option value="{{$horario->id}}">{{$horario->horario}}</option>
                    @endforeach
                </select>
                <br>
                <input class="btn btn-primary" type="submit" value="Enviar">
            </form>
        </div>
    </div>
</div>
@endsection
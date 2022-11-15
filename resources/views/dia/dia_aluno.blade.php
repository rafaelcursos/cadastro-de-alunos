@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6 m-auto">
            <h3>Escolha o dia do seu curso</h3>
            <h5>{{$aluno->nome}}</h5>
            <form action="/dia_aluno/{{$aluno->id}}" method="post" class="form-group">
                @csrf
                <select name="dia" id="dia" class="form-select">
                    @foreach($dias as $dia)
                    <option value="{{$dia->id}}">{{$dia->dia}}</option>
                    @endforeach
                </select>
                <br>
                <input class="btn btn-primary" type="submit" value="Enviar">
            </form>
        </div>
    </div>
</div>
@endsection
@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-6 m-auto">
            <h2>Dia de Vencimento</h2>
            <h5>Aluno: {{$aluno->nome}}</h5>

            <form action="/mensalidade/create/{{$aluno->id}}" method="post" class="form-group">
            @csrf
                <div class="form-group">
                    <label class="form-label" for="valor">Valor</label>
                    <input type="number" name="valor" id="valor" class="form-control" value="100">
                </div>

                <div class="form-group">
                    <label class="form-label" for="vencimento">vencimento</label>
                    <select class="form-select" name="vencimento" id="vencimento">
                        <option value="10">Dia 10</option>
                        <option value="15">Dia 15</option>
                        <option value="20">Dia 20</option>
                        <option value="25">Dia 25</option>
                    </select>
                </div>
                
                <br>
            <button class="btn btn-primary" type="submit">Enviar</button>
            </form>
        </div>
    </div>
</div>

@endsection
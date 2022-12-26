@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div style="border: 1px solid #ddd; padding: 1rem; border-radius: 10px" class="col-md-6 m-auto mt-5">
            <h1><u>Confirme o Pagamento</u></h1>
            <h3>Aluno: {{$aluno->nome}}</h3>
            <form action="/aluno/pagar/{{$aluno->id}}" method="post" class="form-group">
                @csrf                
                <label style="font-size: 1rem" for="valor">Valor: R$</label>
                <input style="font-size: 1rem; border:0" type="number" name="valor" id="valor" value="{{$valor}}">
                <button class="btn btn-primary" type="submit">Confirmar</button>
            </form>
        </div>
    </div>
</div>

@endsection
@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-6 m-auto">
            <h2>Novo curso</h2>
            <form action="/curso/criar" method="post" class="form-group" enctype="multipart/form-data">
            @csrf
                <div class="form-group">
                    <label class="form-label" for="curso">Curso</label>
                    <input type="text" name="curso" id="curso" class="form-control">
                </div>
                
                <div class="form-group">
                    <label class="form-label" for="descricao">Descrição</label>
                    <input type="text" name="descricao" id="descricao" class="form-control">
                </div>
                
                <div class="form-group">
                    <label class="form-label" for="imagem">Imagem</label>
                    <input type="file" name="imagem" id="imagem" class="form-control">
                </div>

                <div class="form-group">
                    <label class="form-label" for="valor">Valor</label>
                    <input type="number" step="0.1" min="0" name="valor" id="valor" class="form-control">
                </div>

                <div class="form-group">
                    <label class="form-label" for="duracao">Duração</label>
                    <input type="number" min="0" name="duracao" id="duracao" class="form-control">
                </div>

                <br>
            <button class="btn btn-primary" type="submit">Enviar</button>
            </form>
        </div>
    </div>
</div>

@endsection
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
            <div class="col-6 m-auto">
                <h2>Curso de {{ $curso->curso }}</h2>
                <form action="/curso/update" method="post" class="form-group" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label class="form-label" for="curso">Curso</label>
                        <input type="text" name="curso" id="curso" class="form-control"
                            value="{{ $curso->curso }}">
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="descricao">Descrição</label>
                        <input type="text" name="descricao" id="descricao" class="form-control"
                            value="{{ $curso->descricao }}">
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="imagem">Imagem</label>
                        <input type="file" name="imagem" id="imagem" class="form-control">
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="valor">Valor</label>
                        <input type="number" step="0.1" min="0" name="valor" id="valor"
                            class="form-control" value="{{ $curso->valor }}">
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="duracao">Duração</label>
                        <input type="number" min="0" name="duracao" id="duracao" class="form-control"
                            value="{{ $curso->duracao }}">
                    </div>

                    <br>
                    <button class="btn btn-primary" type="submit">Enviar</button>
                </form>
                <hr>
                <span style="color: brown; margin: 1rem 2rem;">Cuidado aqui você poderá excluir este curso!</span>
                <button class="btn btn-danger">Delete</button>
                <a href="/curso/home" class="btn btn-primary">Voltar</a>

            </div>
        </div>

        <div class="row">
            <div class="col-12">
            </div>
        </div>
    </div>
@endsection

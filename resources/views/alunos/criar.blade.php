@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 d-flex justify-content-end">
                <a href="/home" class="btn btn-primary">Voltar</a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 m-auto">
                <h2>Novo Aluno</h2>
                <form action="/alunos/criar" method="post" class="form-group" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label class="form-label" for="nome">Nome</label>
                        <input type="text" name="nome" id="nome" class="form-control">
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="telefone">Telefone</label>
                        <input width="100" type="phone" name="telefone" id="telefone" class="form-control">
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="responsavel">Responsavel</label>
                        <input width="100" type="text" name="responsavel" id="responsavel" class="form-control">
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="nascimento">Data de Nascimento</label>
                        <input type="date" name="nascimento" id="nascimento" class="form-control">
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="imagem">Imagem</label>
                        <input type="file" name="imagem" id="imagem" class="form-control">
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="rua">Rua</label>
                        <input type="text" name="rua" id="rua" class="form-control">
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="bairro">Bairro</label>
                        <input type="text" name="bairro" id="bairro" class="form-control">
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="cidade">Cidade</label>
                        <input type="text" name="cidade" id="cidade" class="form-control">
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="numero">Numero</label>
                        <input width="100" type="number" name="numero" id="numero" class="form-control">
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="email">Email</label>
                        <input width="100" type="email" name="email" id="email" class="form-control">
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="instagram">instagram</label>
                        <input width="100" type="text" name="instagram" id="instagram" class="form-control">
                    </div>

                    <br>
                    <button class="btn btn-primary" type="submit">Enviar</button>
                </form>
            </div>
        </div>
    </div>
@endsection

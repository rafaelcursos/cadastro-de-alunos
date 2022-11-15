<?php

namespace App\Http\Controllers;

use App\Models\Aluno;
use App\Models\Mensalidade;
use Illuminate\Http\Request;

class AlunoController extends Controller
{
    public function find($id)
    {
        $aluno = Aluno::find($id);
        $mensalidades = $aluno->mensalidades;
        return view('/aluno.info', ['aluno' => $aluno, 'mensalidades' => $mensalidades]);
    }

    public function create()
    {
        return view('/aluno.criar');
    }

    public function store(Request $request)
    {
        $aluno = new Aluno();

        $aluno->nome = $request->nome;
        $aluno->rua = $request->rua;
        $aluno->bairro = $request->bairro;
        $aluno->cidade = $request->cidade;
        $aluno->numero = $request->numero;
        $aluno->telefone = $request->telefone;
        $aluno->email = $request->email;
        $aluno->instagram = $request->instagram;

        if($request->imagem){
            $imagem = $request->imagem;
            $imageName= $imagem->store('/', 'public');
            $aluno->imagem = $imageName;
        }

        $aluno->save();

        return redirect('/mensalidade/home');
    }


}

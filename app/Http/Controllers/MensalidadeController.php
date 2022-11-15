<?php

namespace App\Http\Controllers;

use App\Models\Aluno;
use App\Models\Mensalidade;
use Illuminate\Http\Request;

class MensalidadeController extends Controller
{
    public function index()
    {
        $aluno = Aluno::orderBy('id', 'desc')->first();
        return view('/mensalidade.home', ['aluno' => $aluno]);
    }

    public function store(Request $request, $id)
    {
        $aluno = Aluno::find($id);

        $mensalidade = new Mensalidade();
        $mensalidade->valor = $request->valor;
        $mensalidade->vencimento = $request->vencimento;
        $mensalidade->save();

        $mensalidade_id = Mensalidade::orderBy('id', 'desc')->first();
        $aluno->mensalidades()->attach($mensalidade_id);

        return redirect('/curso_aluno/'.$id);
    }
}

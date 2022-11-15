<?php

namespace App\Http\Controllers;

use App\Models\Aluno;
use App\Models\Pagamento;
use Illuminate\Http\Request;

class PagamentoController extends Controller
{
    public function index($id)
    {
        $aluno = Aluno::find($id);
        foreach($aluno->cursos as $curso)
        {
            $valor = $curso->valor;
        }

        
        return view('/aluno.pagar', ['aluno' => $aluno, 'valor' => $valor]);
    }

    public function store(Request $request, $id)
    {
        $aluno = Aluno::find($id);
        $pagamento = new Pagamento();
        $valor = $request->valor;

        $pagamento->aluno = $aluno->nome;
        $pagamento->valor = $valor;
        $pagamento->save();

        return view('/aluno.recibo', ['aluno' => $aluno, 'valor' => $valor]);
    }
}

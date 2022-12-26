@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row ">

            <div style="border: 1px solid #ddd; padding: 1rem; border-radius: 10px" class="col-md-8 m-auto mt-5 bg-white">
                <h1><u>Pagamento Realizado</u></h1>
                <h3>Aluno: {{ $aluno->nome }}</h3>
                <span></span>
                <h5>Pagou o valor de <u>R${{ $valor }}</u> , dia {{date('d/m/Y')}}, referente ao(s) curso(s):</h5>
                    <ul>
                        @foreach($aluno->cursos as $cursos)
                           <li>{{$cursos->curso}}</li>
                        @endforeach

                    </ul>
                <p>RafaelCursos: Av. Raul Alves Ferreira, Nº 35, Centro, Rodeiro, MG.</p>
                <p>(32) 9 9808-3600 </p>
                <button onclick="imprime()" class="btn">Imprimir</button>
            </div>
        </div>
    </div>

    <script>
        function imprime() {
            window.print();
            window.location.href = '/home';
        }
    </script>
@endsection

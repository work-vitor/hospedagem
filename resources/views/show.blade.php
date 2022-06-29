@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>{{ $hospedagens->nome }}</h1>
@stop

@section('content')

    <div class="container h-100">
        <div class="row">

            <div class="col-12" style="margin: 0 auto;">
                <p><img src="data:image/;base64,{{ base64_encode($hospedagens->foto) }}" alt="{{ $hospedagens->nome }}"
                        style="max-width:100%; border-radius:10px;"></p>
                {{-- passar o id na func show não esquecer --}}

            </div>

            <div class="col-12">
                <div class="card bg-light">
                    <div class="card-body">
                        <h4 class="card-title">Hospedagem: {{ $hospedagens->nome }}</h4><br>
                        <p>Serviços: {{ $hospedagens->servicos }}</p>
                        <p>Valor: {{ $hospedagens->valor_leito }}</p>
                        <p>Descrição: {{ $hospedagens->descricao }}</p>
                        <a href="{{ route('compra', $hospedagens->id) }}" class="btn btn-dark">Comprar</a>
                    </div>
                </div>
            </div>

            @foreach ($quartos as $quarto)
                <div class="col-6">
                    <div class="card bg-dark">
                        <div class="card-body">
                            <p>Quarto: {{ $quarto->id }}</p>
                            <p>Quantidade de leitos: {{ $quarto->qtd_leitos }}</p>
                            <br><br>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </div>


@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script>
        console.log('Hi!');
    </script>
@stop

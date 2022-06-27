@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')

    <p>Welcome to this beautiful admin panel.</p>
    <div class="container h-100">
        <div class="row">

            <div class="col-6">
                <div class="card h-100">
                    <div class="card-body">
                        <p>Hospedagem: {{ $hospedagens->nome }}</p>
                        <p>Descrição: {{ $hospedagens->descricao }}</p>

                        @foreach ($quartos as $quarto)
                            <p>Quarto: {{ $quarto->id }}</p>
                            <p>Quantidade de leitos: {{ $quarto->qtd_leitos }}</p>
                            <br><br>
                        @endforeach

                    </div>
                </div>
            </div>

            <div class="col-6">
                <img src="{{ $hospedagens->foto }}" alt="Fotos da hospedagem :{{ $hospedagens->nome }}" class="img-fluid">
                {{-- passar o id na func show não esquecer --}}

            </div>

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

@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Hospedagens</h1>
@stop

@section('content')
    <div class="container">
        <div class="row">
            @foreach ($hospedagens as $hospedagem )
                <div class="col-12 col-sm-6 col-md-4 my-3" align="center">
                    {{-- <p><img src="{{ url("storage/{$livro->capa}") }}" alt="{{ $livro->titulo }}" style="width:250px; height:200px;"></p> --}}
                    <h3>{{ $hospedagem->nome }}</h3>
                    <p>{{ $hospedagem->descricao }}</p>
                    {{-- <a href="{{ route('show', $hospedagem->id) }}" class="btn btn-dark btn-lg mr-1">Ver detalhes</a> --}}
                    {{-- <a href="{{ route('compra', $hospedagem->id) }}" class="btn btn-dark btn-lg ml-1">Comprar</a> --}}
                </div>
            @endforeach
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log("Hi! that's the main page, here you can find a beautiful page made with love :). Follow me in my github @dvlln and linkedin https://www.linkedin.com/in/allan-franco-mauricio/."); </script>
@stop
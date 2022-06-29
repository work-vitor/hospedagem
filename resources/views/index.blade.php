@extends('adminlte::page')

@section('title', 'Home')

@section('content_header')
    <h1>Hospedagens</h1>
@stop

@section('content')
    <form method="post" action="{{ route('search') }}">
        @csrf
        <input type= "text" name="search" id="search" placeholder="Digite sua busca">
        <button type="submit" class="btn btn-dark">Buscar</button>
    </form>

    @if(isset($filters))
        {{ $hospedagens->appends($filters)->links() }}
    @else
        {{ $hospedagens->links() }}
    @endif

    <hr>

    <div class="container">
        <div class="row">
            @foreach ($hospedagens as $hospedagem )
            <div class="col-12 col-sm-6 col-md-4 my-3">
                <div><a href="{{ route('show', $hospedagem->id) }}" style="color: black;">
                    <img src="data:image/;base64,{{ base64_encode($hospedagem->foto) }}" alt="{{ $hospedagem->nome }}" style="width:250px; height:200px; border-radius:10px">
                    <h2><b>{{ $hospedagem->nome }}</b></h3>
                    <h4>R$ {{ $hospedagem->valor_leito }}</h5>
                </div></a>
                <div>
                    <a href="{{ route('show', $hospedagem->id) }}" class="btn btn-dark btn-lg mr-1">Ver detalhes</a>
                    <a href="{{ route('compra', $hospedagem->id) }}" class="btn btn-dark btn-lg ml-1">Comprar</a>
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
    <script> console.log("Hi! that's the main page, here you can find a beautiful page made with love :). Follow me in my github @dvlln and linkedin https://www.linkedin.com/in/allan-franco-mauricio/."); </script>
@stop

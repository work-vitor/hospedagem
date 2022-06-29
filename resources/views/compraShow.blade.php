@extends('adminlte::page')

@section('title', 'Home')

@section('content_header')
    <h1>Compras</h1>
@stop

@section('content')
   

    <hr>

    <div class="container">
        <div class="row">
            @foreach ($compras as $compra )
                <div class="col-12 col-sm-6 col-md-4 my-3" align="center">

                    <h3>Catwgoria: {{ $compra->categoria }}</h3>
                    <h3>Check-In: {{ $compra->checkin}}</h3>
                    <h3>Check-Out: {{ $compra->checkout}}</h3>
                    <h3>Valor Total: R$ {{$compra->valor_total}}</h3>
                    
                    <a href="" class="btn btn-dark btn-lg ml-1">Cancelar compra</a>
                </div>
            @endforeach
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log("Hi! that's the main page, here you can find a beautiful page made with love :). Follow me in my github @work-vitor and linkedin https://www.linkedin.com/in/vitor-rodrigues21/."); </script>
@stop
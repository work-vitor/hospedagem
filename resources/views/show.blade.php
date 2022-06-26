@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')

    <p>Welcome to this beautiful admin panel.</p>
    <div class="container">
        <div class="row">
            <div class="col-6">
                <div class="card">
                    <div class="card-body">
                        <p>Hospedagem: {{ $hospedagens->nome }}</p>
                        <p>Descrição: {{ $hospedagens->descricao }}</p>

                    </div>
                </div>
            </div>
            <div class="col-6">
                <img src="{{$hospedagens->foto}}" alt="" class="img-fluid"> {{--não sei se ta certo--}}
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

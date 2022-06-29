@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Compra</h1>
@stop

@section('content')

    <div class="container">
        <div class="row">
            <div class="compra">
                <form method="post" action="{{ route('compra.store') }}">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">

                    <label for="quarto">Quarto:</label>
                    <select class="form-select" name="quartos_id">
                        @foreach ($quartos as $quarto)
                            <option value="{{ $quarto->id }}">{{ $quarto->id }}</option>
                        @endforeach
                    </select>

                    <div class="checks">
                        <label for="entrada">Check-in:</label>
                        <input type="date" name="checkin" id="checkin" class="check" value="{{ old('checkin') }}"
                            required>
                        <span class="validity"></span>
                        <br>
                        <label for="saida">Check-out:</label>
                        <input type="date" name="checkout" id="checkout" class="check" value="{{ old('checkout') }}"
                            required>
                        <span class="validity"></span>
                    </div>


                    <label for="categoria">Categoria:</label>
                    <select class="form-select" aria-label="Default select example" name="categoria">
                        <option selected>Opção</option>
                        <option value="leito">Leito</option>
                        <option value="quarto">Quarto</option>
                    </select>
                    <br>

                    <label for="categoria">Serviço de quarto:</label>
                    <select class="form-select" aria-label="Default select example" name="opcao_servico">
                        <option selected>Opção</option>
                        <option value="1">Sim</option>
                        <option value="0">Não</option>
                    </select>

                    <br>

                    <label for="entrada">Valor Total:</label>
                    <span>R${{ $hospedagens->valor_leito }}</span>
                    <input type="hidden" name="valor_total" value="{{ $hospedagens->valor_leito }}" readonly>
                    <input type="hidden" name="usuarios_id" value="{{ $usuarios->id }}">

                    <div class="d-grid gap-2 col-5 mx-auto">
                        <button class="btn btn-primary" type="submit">Comprar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@stop

@section('css')
    <link rel="stylesheet" href="{{ asset('css/compra_style.css') }}">
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script>
        console.log('Hi!');
    </script>
@stop

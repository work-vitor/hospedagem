@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Compra</h1>
@stop

@section('content')

    <div class="row">
        <div class="compra">
            <form method="post" action="{{route('compra.store')}}">
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <div class="checks">
                    <label for="entrada">Check-in:</label>
                    <input type="date" name="checkin" id="checkin" class="check" value="{{old('checkin')}}" required>
                    <br>
                    <label for="saida">Check-out:</label>
                    <input type="date" name="checkout" id="checkout" class="check" value="{{old('checkout')}}" required>
                    <span class="validity"></span>
                </div>


                <label for="categoria">Categoria:</label>
                <select class="form-select" aria-label="Default select example" name="categoria">
                    <option selected >Escolhe</option>
                    <option value="A">A</option>
                    <option value="B">B</option>
                    <option value="C">C</option>
                </select>
                <br>

                <label for="categoria">Serviço de quarto:</label>
                <select class="form-select" aria-label="Default select example" name="opcao_servico">
                    <option selected >Escolhe</option>
                    <option value="1">Sim</option>
                    <option value="0">Não</option>
                </select>

                <br>

                <label for="entrada">Valor Total:</label>
                <input type="text" name="valor_total" value="{{ $hospedagens->valor_leito }}" readonly>
                <input  type="hidden" name="quartos_id" value="{{ $quartos->id}}" >
                <input type="hidden" name="usuarios_id" value="{{ $usuarios->id}}" >



                {{-- <div class="hospedes">
                    <label for="qtd_hospedes">Hospedes:</label>
                    <input type="number" name="qtd_hospedes" id="qtd_hospedes" min="0" max="20">
                </div> --}}

                <div class="d-grid gap-2 col-3 mx-auto">
                    <button class="btn btn-primary" type="submit">Comprar</button>
                </div>
            </form>
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

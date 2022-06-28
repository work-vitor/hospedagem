@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Compra</h1>
@stop

@section('content')

    <div class="row">
        <div class="compra">
            <form>
                <div class="checks">
                    <label for="entrada">Check-in</label>
                    <input type="date" name="checkin" id="check-in" class="check" required>
                    <label for="saida">Check-out</label>
                    <input type="date" name="checkout" id="check-out" class="check" required>
                    <span class="validity"></span>
                </div>

                <select class="form-select" aria-label="Default select example">
                    <option selected>Escolhe</option>
                    <option value="1">A</option>
                    <option value="2">B</option>
                    <option value="3">C</option>
                  </select>



               {{--  <div class="hospedes">
                    <label for="qtd_hospedes">Hospedes:</label>
                    <input type="number" name="qtd_hospedes" id="qtd_hospedes" min="0" max="20">
                </div> --}}

                <div class="d-grid gap-2 col-3 mx-auto">
                    <button class="btn btn-primary" type="button">Comprar</button>
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

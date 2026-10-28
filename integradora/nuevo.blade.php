@extends('layouts.base')

@section('contenido')
    <div class="tarjeta">
        <h2>Registrar torta</h2>

        @if ($errors->any())
            <div class="error">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="/tortas/nuevo" method="POST">
            @csrf
            <label for="sabor">Sabor de la torta</label>
            <input type="text" id="sabor" name="sabor">

            <label for="precio">Precio en Bs</label>
            <input type="number" id="precio" name="precio">

            <button type="submit">Registrar torta</button>
        </form>
    </div>
@endsection
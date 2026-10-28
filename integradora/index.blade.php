@extends('layouts.base')

@section('contenido')
    <p>En Pasteleria La Espiga horneamos tortas artesanales todos los dias para los pedidos de nuestro barrio.</p>

    <div class="tarjeta">
        <h2>Vitrina de tortas</h2>
        <p>Hay {{ count($tortas) }} tortas en la vitrina.</p>

        <ul>
            @foreach ($tortas as $torta)
                <li>{{ $torta->sabor }} - {{ $torta->precio }} Bs</li>
            @endforeach
        </ul>

        <p>Vitrina atendida por Rodrigo Wilder Lima Canaviri</p>
        <a href="/tortas/nuevo">Registrar una torta nueva</a>
    </div>
@endsection
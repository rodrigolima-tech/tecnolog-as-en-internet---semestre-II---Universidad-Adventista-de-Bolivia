<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Panel - Productos</title>
  <style>
    body { font-family: Arial, Helvetica, sans-serif; background-color: #f6f3ee; color: #2e2a24; margin: 0; }
    header { background-color: #1f6f43; color: #fff; padding: 14px 20px; display: flex; justify-content: space-between; align-items: center; }
    header p { font-weight: bold; margin: 0; }
    button { background-color: #e8a33d; border: none; border-radius: 6px; padding: 8px 14px; font-weight: bold; cursor: pointer; }
    main { max-width: 800px; margin: 0 auto; padding: 20px; }
    .tarjeta { background-color: #fff; border: 1px solid #e4dccf; border-radius: 12px; padding: 20px; }
    h1 { color: #1f6f43; }
    table { width: 100%; border-collapse: collapse; margin-top: 12px; }
    th, td { border: 1px solid #e4dccf; padding: 8px; text-align: left; }
    th { background-color: #faf7f0; }
    .nuevo { display: inline-block; margin-top: 16px; background-color: #1f6f43; color: #fff; text-decoration: none; padding: 10px 18px; border-radius: 6px; font-weight: bold; }
  </style>
</head>
<body>
  <header>
    <p>PANEL - LA TIENDA DEL LOCO RODRIGO</p>
    <form method="POST" action="/logout">
      @csrf
      <button type="submit">Salir</button>
    </form>
  </header>

  <main>
    <div class="tarjeta">
      <h1>Productos en stock</h1>

      <table>
        <tr>
          <th>Nombre</th>
          <th>Precio (Bs)</th>
          <th>Stock</th>
        </tr>

        @foreach($productos as $producto)
        <tr>
          <td>{{ $producto->nombre }}</td>
          <td>{{ $producto->precio }}</td>
          <td>{{ $producto->stock }}</td>
        </tr>
        @endforeach
      </table>

      <a class="nuevo" href="/productos/crear">+ Cargar producto nuevo</a>
    </div>
  </main>
</body>
</html>

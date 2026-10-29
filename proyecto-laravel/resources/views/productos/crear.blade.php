<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cargar producto</title>
  <style>
    body { font-family: Arial, Helvetica, sans-serif; background-color: #f6f3ee; color: #2e2a24; margin: 0; }
    header { background-color: #1f6f43; color: #fff; padding: 14px 20px; }
    header p { font-weight: bold; margin: 0; }
    main { max-width: 500px; margin: 0 auto; padding: 20px; }
    .tarjeta { background-color: #fff; border: 1px solid #e4dccf; border-radius: 12px; padding: 20px; }
    h1 { color: #1f6f43; }
    label { display: block; margin-top: 12px; font-weight: bold; }
    input { width: 100%; padding: 8px; border: 1px solid #c9bfae; border-radius: 6px; box-sizing: border-box; }
    button { margin-top: 16px; width: 100%; background-color: #1f6f43; color: #fff; border: none; border-radius: 6px; padding: 10px; font-weight: bold; cursor: pointer; }
    .error { color: #c0392b; font-size: 13px; margin: 4px 0 0; }
  </style>
</head>
<body>
  <header><p>LA TIENDA DEL LOCO RODRIGO - Alta de producto</p></header>

  <main>
    <div class="tarjeta">
      <h1>Cargar producto nuevo</h1>

      <form method="POST" action="/productos">
        @csrf

        <label for="nombre">Nombre</label>
        <input type="text" id="nombre" name="nombre" value="{{ old('nombre') }}">
        @error('nombre') <p class="error">{{ $message }}</p> @enderror

        <label for="precio">Precio (Bs)</label>
        <input type="number" id="precio" name="precio" step="0.01" value="{{ old('precio') }}">
        @error('precio') <p class="error">{{ $message }}</p> @enderror

        <label for="stock">Stock</label>
        <input type="number" id="stock" name="stock" value="{{ old('stock') }}">
        @error('stock') <p class="error">{{ $message }}</p> @enderror

        <button type="submit">Guardar</button>
      </form>
    </div>
  </main>
</body>
</html>

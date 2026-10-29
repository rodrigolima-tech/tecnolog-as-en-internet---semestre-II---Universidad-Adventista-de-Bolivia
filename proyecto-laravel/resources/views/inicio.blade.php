<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Inicio - LA TIENDA DEL LOCO RODRIGO</title>
  <style>
    body { font-family: Arial, Helvetica, sans-serif; background-color: #f6f3ee; color: #2e2a24; margin: 0; line-height: 1.5; }
    header { background-color: #1f6f43; color: #fff; padding: 20px; text-align: center; }
    header p { font-size: 28px; font-weight: bold; margin: 0 0 10px 0; }
    nav a { color: #fff; text-decoration: none; font-weight: bold; margin: 0 8px; }
    main { max-width: 800px; margin: 0 auto; padding: 20px; }
    .tarjeta { background-color: #fff; border: 1px solid #e4dccf; border-radius: 12px; padding: 20px; margin-bottom: 20px; }
    h1, h2 { color: #1f6f43; }
    img { max-width: 300px; width: 100%; height: auto; }
    footer { background-color: #2e2a24; color: #fff; text-align: center; padding: 16px; }
  </style>
</head>
<body>
  <header>
    <p>LA TIENDA DEL LOCO RODRIGO</p>
    <nav>
      <a href="/inicio">Inicio</a>
      <a href="/contacto">Contacto</a>
      <a href="/login">Acceso al panel del admin</a>
    </nav>
  </header>

  <main>
    <section class="tarjeta">
      <h1>Tu tienda de confianza</h1>
      <p>Consulta siempre los productos disponibles.</p>
      <h2>Estos son mis productos</h2>

@forelse($productos as $producto)
  <div class="tarjeta">
    <strong>{{ $producto->nombre }}</strong><br>
    Precio: {{ $producto->precio }} Bs — Stock: {{ $producto->stock }} unidades
  </div>
@empty
  <p>No hay productos cargados todavía.</p>
@endforelse
    </section>
  </main>

  <footer>
    <p>© 2026 - Rodrigo Wilder Lima Canaviri (UAB)</p>
  </footer>
</body>
</html>

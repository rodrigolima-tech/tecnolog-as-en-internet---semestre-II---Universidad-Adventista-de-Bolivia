<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contacto - LA TIENDA DEL LOCO RODRIGO</title>
  <style>
    body { font-family: Arial, Helvetica, sans-serif; background-color: #f6f3ee; color: #2e2a24; margin: 0; line-height: 1.5; }
    header { background-color: #1f6f43; color: #fff; padding: 20px; text-align: center; }
    header p { font-size: 28px; font-weight: bold; margin: 0 0 10px 0; }
    nav a { color: #fff; text-decoration: none; font-weight: bold; margin: 0 8px; }
    main { max-width: 800px; margin: 0 auto; padding: 20px; }
    .tarjeta { background-color: #fff; border: 1px solid #e4dccf; border-radius: 12px; padding: 20px; margin-bottom: 20px; }
    h1 { color: #1f6f43; }
    label { display: block; margin-top: 12px; font-weight: bold; }
    input, select, textarea { width: 100%; padding: 8px; border: 1px solid #c9bfae; border-radius: 6px; box-sizing: border-box; font-family: inherit; }
    button { margin-top: 16px; background-color: #e8a33d; border: none; border-radius: 6px; padding: 10px 20px; font-weight: bold; cursor: pointer; }
    footer { background-color: #2e2a24; color: #fff; text-align: center; padding: 16px; }
  </style>
</head>
<body>
  <header>
    <p>LA TIENDA DEL LOCO RODRIGO</p>
    <nav>
      <a href="/inicio">Inicio</a>
      <a href="/contacto">Contacto</a>
    </nav>
  </header>

  <main>
    <section class="tarjeta">
      <h1>Contáctame</h1>

      <form method="POST" action="#">
        <label for="nombre">Nombre completo</label>
        <input type="text" id="nombre" name="nombre" placeholder="Tu nombre" required>

        <label for="correo">Correo electrónico</label>
        <input type="email" id="correo" name="correo" placeholder="tu@correo.com" required>

        <label for="telefono">Teléfono</label>
        <input type="tel" id="telefono" name="telefono" placeholder="700 00000">

        <label for="asunto">Asunto</label>
        <select id="asunto" name="asunto">
          <option value="pedido">Quiero hacer un pedido</option>
          <option value="consulta">Consultar un producto</option>
          <option value="otro">Otro</option>
        </select>

        <label for="mensaje">Mensaje</label>
        <textarea id="mensaje" name="mensaje" rows="4" placeholder="Escribe tu mensaje"></textarea>

        <button type="submit">Enviar</button>
      </form>
    </section>
  </main>

  <footer>
    <p>© 2026 - Rodrigo Wilder Lima Canaviri (UAB)</p>
  </footer>
</body>
</html>

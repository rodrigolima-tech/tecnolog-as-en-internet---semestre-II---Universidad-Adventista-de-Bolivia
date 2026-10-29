<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pasteleria La Espiga</title>
    <style>
        body { font-family: Arial, sans-serif; background: #fdf6ec; color: #3a2e22; margin: 0; }
        header { background: #8b5e3c; color: #fff; text-align: center; padding: 20px; }
        main { max-width: 700px; margin: 20px auto; padding: 0 16px; }
        .tarjeta { background: #fff; border-radius: 12px; padding: 20px; margin-bottom: 16px; }
        label { display: block; font-weight: bold; margin-top: 12px; }
        input { width: 100%; padding: 8px; border: 1px solid #c9b8a3; border-radius: 6px; box-sizing: border-box; }
        button { margin-top: 16px; background: #8b5e3c; color: #fff; border: none; border-radius: 6px; padding: 10px 20px; cursor: pointer; }
        .error { background: #fdecea; color: #b3261e; padding: 10px; border-radius: 6px; margin-top: 12px; }
        footer { text-align: center; padding: 16px; background: #3a2e22; color: #fff; }
    </style>
</head>
<body>
    <header>
        <h1>Pasteleria La Espiga</h1>
    </header>
    <main>
        @yield('contenido')
    </main>
    <footer>
        <p>Integradora - Rodrigo Wilder Lima Canaviri - 27 de octubre de 2026</p>
    </footer>
</body>
</html>
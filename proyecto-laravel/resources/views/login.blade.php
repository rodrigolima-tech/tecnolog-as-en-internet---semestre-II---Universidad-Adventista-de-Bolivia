<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login - LA TIENDA DEL LOCO RODRIGO</title>
  <style>
    body { font-family: Arial, Helvetica, sans-serif; background-color: #f6f3ee; color: #2e2a24; margin: 0; }
    main { max-width: 400px; margin: 60px auto; padding: 20px; }
    .tarjeta { background-color: #fff; border: 1px solid #e4dccf; border-radius: 12px; padding: 24px; }
    h1 { color: #1f6f43; font-size: 22px; }
    label { display: block; margin-top: 12px; font-weight: bold; }
    input { width: 100%; padding: 8px; border: 1px solid #c9bfae; border-radius: 6px; box-sizing: border-box; }
    button { margin-top: 16px; width: 100%; background-color: #1f6f43; color: #fff; border: none; border-radius: 6px; padding: 10px; font-weight: bold; cursor: pointer; }
    .error { color: #c0392b; font-size: 14px; margin-top: 10px; }
  </style>
</head>
<body>
  <main>
    <div>
      <a href="/inicio">Volver al inicio</a>
      <div>
    <div class="tarjeta">
      <h1>Panel de LA TIENDA DEL LOCO RODRIGO</h1>

      <form method="POST" action="/login">
        @csrf

        <label for="email">Correo</label>
        <input type="email" id="email" name="email" value="{{ old('email') }}" required>

        <label for="password">Contrasena</label>
        <input type="password" id="password" name="password" required>

        @error('email')
          <p class="error">{{ $message }}</p>
        @enderror

        <button type="submit">Entrar</button>
      </form>
    </div>
  </main>
</body>
</html>

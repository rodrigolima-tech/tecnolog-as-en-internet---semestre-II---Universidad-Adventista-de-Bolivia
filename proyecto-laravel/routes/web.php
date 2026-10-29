<?php
use App\Models\Producto;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Http\Controllers\ProductoController;

Route::get('/inicio', function () {
    return view('inicio', ['productos' => Producto::all()]);
});

Route::get('/contacto', function () {
    return view('contacto');
});


Route::get('/login', function () {
    return view('login');
})->name('login');

Route::post('/login', function (Request $request) {

    $datos = $request->validate([
        'email' => 'required|email',
        'password' => 'required',
    ]);

    $user = User::where('email', $datos['email'])->first();

    if ($user && Hash::check($datos['password'], $user->password)) {
        session(['usuario' => $user->email]); 
        return redirect('/productos');
    }

    return back()->withErrors(['email' => 'Usuario o contrasena incorrectos']);
});

Route::post('/logout', function () {
    session()->forget('usuario'); 
    return redirect('/login');
});


Route::middleware('auth.manual')->group(function () {
    Route::get('/productos', [ProductoController::class, 'index']);
    Route::get('/productos/crear', [ProductoController::class, 'crear']);
    Route::post('/productos', [ProductoController::class, 'guardar']);
});



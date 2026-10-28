<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Http\Controllers\ProductoController;
use App\Models\Torta;
Route::get('/inicio', function () {
    return view('inicio');
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



//INGE NO BORRE LAS RUTAS DE MIS ANTERIORES PROYECTOS PORQUE SIENTO QUE SE ROMPERAN DESDE AQUI SON LAS RUTAS Y OTROS DE LA EVALUACION INTEGRADORA

Route::get('/tortas', function () {
    $tortas = Torta::all();
    return view('tortas.index', compact('tortas'));
});

Route::get('/tortas/nuevo', function () {
    return view('tortas.nuevo');
});

Route::post('/tortas/nuevo', function () {
    request()->validate(
        [
            'sabor' => 'required',
            'precio' => 'required|integer',
        ],
        [
            'sabor.required' => 'Indica el sabor de la torta.',
            'precio.required' => 'Indica el precio de la torta.',
            'precio.integer' => 'El precio va en digitos, sin centavos.',
        ]
    );

    Torta::create([
        'sabor' => request()->input('sabor'),
        'precio' => request()->input('precio'),
    ]);

    return redirect('/tortas');
});
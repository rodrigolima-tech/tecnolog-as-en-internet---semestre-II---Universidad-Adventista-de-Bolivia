<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;

class ProductoController extends Controller
{

    public function index()
    {
        $productos = Producto::all();
        return view('productos.index', compact('productos'));
    }


    public function crear()
    {
        return view('productos.crear');
    }


    public function guardar(Request $request)
    {
        $datos = $request->validate([
            'nombre' => 'required|min:3',
            'precio' => 'required|numeric|min:1',
            'stock'  => 'required|integer|min:0',
        ]);

        Producto::create($datos);

        return redirect('/productos');
    }
}

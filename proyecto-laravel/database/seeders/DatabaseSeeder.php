<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Producto;

class DatabaseSeeder extends Seeder
{

    public function run(): void
    {
 
        User::create([
            'name' => 'Rodrigo',
            'email' => 'admin@locorodrigo.bo',
            'password' => Hash::make('rodrigo2026'),
        ]);


        Producto::create(['nombre' => 'Honor Magic8 Lite', 'precio' => 2500, 'stock' => 5]);
        Producto::create(['nombre' => 'Cargador USB-C 25W', 'precio' => 80, 'stock' => 20]);
        Producto::create(['nombre' => 'Audifonos Bluetooth', 'precio' => 150, 'stock' => 12]);
    }
}


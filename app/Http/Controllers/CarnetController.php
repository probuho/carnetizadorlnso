<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Carnet; // Asegúrate de tener un modelo Carnet

class CarnetController extends Controller
{
    // app/Http/Controllers/CarnetController.php
    public function create()
    {
        return view('carnet.create'); // Asegúrate de tener esta vista creada
    }

    public function store(Request $request)
    {
        // Validar los datos del formulario
        $data = $request->validate([
            'nombre' => 'required|string|max:255',
            'apellido' => 'required|string|max:255',
            'cedula' => 'required|string|max:255',
            // Otros campos necesarios
        ]);

        // Crear el carnet
        $carnet = Carnet::create($data);

        // Redirigir a la vista previa
        return redirect()->route('carnet.preview', ['id' => $carnet->id]);
    }

    public function preview($id)
    {
        $carnet = Carnet::findOrFail($id);
        return view('carnet.preview', compact('carnet')); // Asegúrate de tener esta vista creada
    }


}

<?php

namespace App\Http\Controllers;

use App\Models\Enfermero;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class EnfermeroController extends Controller
{
    private $validations = [
        'nombre_y_apellido' => "required|string|max:255",
        'dni' => "required|integer|max:99999999",
        'telefono' => "nullable|string|max:255",
        'detalles' => "nullable|string|max:255",
    ];

    public function index(){
        $enfermeros = Enfermero::all();
        return view('enfermero.index', compact('enfermeros'));
    }

    public function create(){
        return view('enfermero.create');
    }

    public function show(Enfermero $enfermero){

        $related = Enfermero::where('id', '!=', $enfermero->id)
                        ->latest('id')
                        ->take(4)
                        ->get();
        return view('enfermero.show', compact('enfermero', 'related'));
    }

    public function store(Request $request)
    {
        $request->validate($this->validations);
        $enfermero = Enfermero::create($request->all());
        return redirect()->route('enfermero.edit', $enfermero)->with('info', 'El enfermero fue creado con éxito');
    }

    public function edit(Enfermero $enfermero)
    {
        return view('enfermero.edit', compact('enfermero'));
    }

    public function update(Request $request, Enfermero $enfermero)
    {
        $request->validate($this->validations);
        $enfermero->update($request->all());

        return redirect()->route('enfermero.edit', $enfermero)->with('info', 'El enfermero fue editado');
    }

    public function destroy(Enfermero $enfermero){
        $enfermero->delete();
        return redirect()->route('enfermero.index', $enfermero)->with('info', 'El enfermero ah sido eliminado');
    }
}

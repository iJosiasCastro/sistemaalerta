<?php

namespace App\Http\Controllers;

use App\Models\Area;
use App\Models\Enfermero;
use App\Models\Paciente;
use Illuminate\Http\Request;

class PacienteController extends Controller
{
    private $validations = [
        'nombre_y_apellido' => "required|string|max:255",
        'dni' => "required|integer|max:99999999",
        'localidad' => "nullable|string|max:255",
        'domicilio' => "nullable|string|max:255",
        'telefono' => "nullable|string|max:255",
        'detalles' => "nullable|string|max:255",
        'area_id' => "required|exists:areas,id",
        'enfermeros' => "nullable|array",
    ];

    public function index(){
        $pacientes = Paciente::all();
        return view('paciente.index', compact('pacientes'));
    }

    public function create(){
        $enfermeros = Enfermero::all();
        $areas_found = Area::all();
        $areas = [];
        foreach ($areas_found as $area) {
            $areas[$area->id] = $area->numero_de_area;
        }
        return view('paciente.create', compact('areas', 'enfermeros'));
    }

    public function show(Paciente $paciente){

        $related = Paciente::where('id', '!=', $paciente->id)
                        ->latest('id')
                        ->take(4)
                        ->get();
        return view('paciente.show', compact('paciente', 'related'));
    }

    public function store(Request $request)
    {
        $request->validate($this->validations);

        // return $request;
        $paciente = Paciente::create($request->all());

        if($request->enfermeros){
            $paciente->enfermeros()->attach($request->enfermeros);
        }

        return redirect()->route('paciente.edit', $paciente)->with('info', 'El paciente fue creado con éxito');
    }

    public function edit(Paciente $paciente)
    {
        $areas_found = Area::all();
        $enfermeros = Enfermero::all();
        $areas = [];
        foreach ($areas_found as $area) {
            $areas[$area->id] = $area->numero_de_area;
        }
        return view('paciente.edit', compact('paciente', 'areas', 'enfermeros'));
    }

    public function update(Request $request, Paciente $paciente)
    {
        $request->validate($this->validations);
        $paciente->update($request->all());

        if($request->enfermeros){
            $paciente->enfermeros()->sync($request->enfermeros);
        }
        
        return redirect()->route('paciente.edit', $paciente)->with('info', 'El paciente fue editado');
    }

    public function destroy(Paciente $paciente){
        $paciente->delete();
        return redirect()->route('paciente.index', $paciente)->with('info', 'El paciente ah sido eliminado');
    }
}

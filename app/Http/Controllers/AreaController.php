<?php

namespace App\Http\Controllers;

use App\Models\Area;
use Illuminate\Http\Request;

class AreaController extends Controller
{
    private $validations = [
        'numero_de_area' => "required|integer|max:255",
        'descripcion' => "nullable|string|max:255",
    ];

    public function index(){
        $areas = Area::all();
        return view('area.index', compact('areas'));
    }

    public function create(){
        return view('area.create');
    }

    public function show(Area $area){

        $related = Area::where('id', '!=', $area->id)
                        ->latest('id')
                        ->take(4)
                        ->get();
        return view('area.show', compact('area', 'related'));
    }

    public function store(Request $request)
    {
        $request->validate($this->validations);
        $area = Area::create($request->all());
        return redirect()->route('area.edit', $area)->with('info', 'El area fue creada con éxito');
    }

    public function edit(Area $area)
    {
        return view('area.edit', compact('area'));
    }

    public function update(Request $request, Area $area)
    {
        $request->validate($this->validations);
        $area->update($request->all());

        return redirect()->route('area.edit', $area)->with('info', 'El area fue editada');
    }

    public function destroy(Area $area){
        $area->delete();
        return redirect()->route('area.index', $area)->with('info', 'El area ah sido eliminada');
    }
}

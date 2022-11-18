<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    private $validations = [
        'name' => "required|string|max:255",
        'email' => "required|email|max:255",
        'role' => "required",
        'password' => "required|string|max:255",
    ];

    public function index(){
        $usuarios = User::all();
        return view('usuario.index', compact('usuarios'));
    }

    public function create(){
        return view('usuario.create');
    }

    public function show(User $usuario){

        $related = User::where('id', '!=', $usuario->id)
                        ->latest('id')
                        ->take(4)
                        ->get();
        return view('usuario.show', compact('usuario', 'related'));
    }

    public function store(Request $request)
    {
        $request->validate($this->validations);
        $usuario = User::create($request->all());
        $usuario->password = bcrypt($request->password);
        $usuario->save();
        return redirect()->route('usuario.edit', $usuario)->with('info', 'El usuario fue creado con éxito');
    }

    public function edit(User $usuario)
    {
        return view('usuario.edit', compact('usuario'));
    }

    public function update(Request $request, User $usuario)
    {
        $request->validate($this->validations);
        $usuario->update($request->all());
        $usuario->password = bcrypt($request->password);
        $usuario->save();

        return redirect()->route('usuario.edit', $usuario)->with('info', 'El usuario fue editado');
    }

    public function destroy(User $usuario){
        $usuario->delete();
        return redirect()->route('usuario.index', $usuario)->with('info', 'El usuario ah sido eliminado');
    }
}

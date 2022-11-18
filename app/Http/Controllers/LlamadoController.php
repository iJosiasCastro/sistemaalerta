<?php

namespace App\Http\Controllers;

use App\Models\Llamado;
use App\Models\Paciente;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Date;

class LlamadoController extends Controller
{
    public function index(){
        $llamados = Llamado::latest()->get();
        return view('llamado.index', compact('llamados'));
    }

    public function escuchar(){
        
        $llamados_query = Llamado::where('atendido', '=', 'false')->limit(5)->orderBy('created_at', 'desc')->get();
        $llamados = [];
        $llamados_importantes = [];
        foreach ($llamados_query as $llamado) {
            $to_time = strtotime($llamado->created_at);
            $from_time = strtotime(Carbon::now()->toDateTimeString());
            $llamado['importante'] = round(abs($to_time - $from_time) / 60,2);
            // Suena durante 15 segundos
            if($llamado['importante']<0.25){
                array_push($llamados_importantes, $llamado);
            }else{
                array_push($llamados, $llamado);
            }
        }

        return view('llamado.listen', compact('llamados', 'llamados_importantes'));
    }

    public function store(Paciente $paciente, int $tipo_index = 0)
    {
        $tipos = ['cama', 'baño'];
        
        if(!empty($paciente) && !empty($tipos[$tipo_index])){
            $llamado = Llamado::create([
                'area_id' => $paciente->area_id,
                'paciente_id' => $paciente->id,
                'atendido' => false,
                'tipo' => $tipos[$tipo_index],
            ]);
            return response('El llamado fue cargado', 202);
        }else{
            return response('Error cargando el llamado', 400);
        }
    }

    public function atender(Llamado $llamado)
    {
        $llamado->atendido = true;
        $llamado->fecha_atendido = Carbon::now()->toDateTimeString();
        $llamado->save();
        return redirect()->route('llamado.index', $llamado)->with('info', 'El llamado fue atendido');
    }

    public function atender_escuchar(Llamado $llamado)
    {
        $llamado->atendido = true;
        $llamado->fecha_atendido = Carbon::now()->toDateTimeString();
        $llamado->save();
        return redirect()->route('llamado.escuchar', $llamado)->with('info', 'El llamado fue atendido');
    }


    public function destroy(Llamado $llamado){
        $llamado->delete();
        return redirect()->route('llamado.index', $llamado)->with('info', 'El llamado ah sido eliminado');
    }
}

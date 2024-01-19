<?php

namespace App\Http\Controllers;

use App\Models\Hora;
use App\Models\Tienda;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class HoraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   $request->validate([
        'hora_ingreso'=>'required|date_format:H:i',
        'hora_salida'=>'required|date_format:H:i',
      
    ]);

    $fecha_ingreso = Carbon::parse($request->fecha . ' ' . $request->hora_ingreso);
    $fecha_salida = Carbon::parse($request->fecha . ' ' . $request->hora_salida);
    
    // Calcular la diferencia en minutos
    $diferencia_minutos = $fecha_salida->diffInMinutes($fecha_ingreso);
    
    // Convertir la diferencia a horas con decimales
    $diferencia_horas = $diferencia_minutos / 60;
    
    // Calcular las horas extra
    $extra = $diferencia_horas - $request->contrato - $request->colacion;

        $tienda=Tienda::find($request->tienda_id);
    if ($extra>0) {
        $hora=Hora::create([
            'fecha'=>$request->fecha,
            'user_id'=>$request->user_id,
            'hora_ingreso'=>$request->hora_ingreso,
            'hora_salida'=>$request->hora_salida,
            'horas'=> $diferencia_horas,
            'colacion'=> $request->colacion,
            'precio'=> $request->precio,
            'precio_extra'=> $request->precio_extra,
            'contrato'=> $request->contrato,
            'extra'=> $extra
        ]);
    } else {
        $hora=Hora::create([
            'fecha'=>$request->fecha,
            'user_id'=>$request->user_id,
            'hora_ingreso'=>$request->hora_ingreso,
            'hora_salida'=>$request->hora_salida,
            'horas'=> $diferencia_horas,
            'colacion'=> $request->colacion,
            'precio'=> $request->precio,
            'precio_extra'=> $request->precio_extra,
            'contrato'=> $request->contrato,
            'extra'=> 0
        ]);
    }
        
      
        if ($request->n) {
            return redirect(route('horas.trabajador',$tienda).'/#'.$request->n-1);
        } else {
            return redirect(route('horas.trabajador',$tienda));
        }
        
     
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Hora $hora)
    {   
        $hora->delete();
        return redirect()->back()->with('eliminado','Horas Eliminadas');

    }
}

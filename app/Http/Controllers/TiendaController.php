<?php

namespace App\Http\Controllers;

use App\Models\Tienda;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Intervention\Image\Facades\Image;
use Illuminate\support\Str;

class TiendaController extends Controller
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
        return view('tiendas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'ubicacion'=>'required',
            'rut'=>'required',
            'giro'=>'required',
            'direccion_comercial'=>'required'

        ]);

        $tienda = Tienda::create([   'name'=>$request->name,
                                    'ubicacion'=>$request->ubicacion,
                                    'rut'=>$request->rut,
                                    'giro'=>$request->giro,
                                    'direccion_comercial'=>$request->direccion_comercial,
                                    'user_id'=>$request->user_id,
                                ]);

        Cache::flush();

        if($request->file('file')){
        
            $nombre = Str::random(10).$request->file('file')->getClientOriginalName();
            $ruta = public_path().'/storage/tiendas/'.$nombre;
    
            Image::make($request->file('file'))->orientate()
                    ->resize(600, 600 , function($constraint){
                    $constraint->aspectRatio();
                    })
                    ->save($ruta);
            $tienda->update([
                        'logo'=>'tiendas/'.$nombre
                    ]);
            }

        return redirect()->route('tiendas.edit',$tienda);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Tienda $tienda)
    {
        return view('tiendas.show',compact('tienda'));
    }

    public function horastrabajadores(Tienda $tienda)
    {   // Obtener la fecha actual
        $currentDate = Carbon::now();
    
        // Obtener el año actual
        $year = $currentDate->year;
    
        // Obtener el mes actual
        $month = $currentDate->month;

        $startOfMonth = Carbon::create($year, $month, 1);

        // Obtener el número de días en el mes
        $numberOfDays = $startOfMonth->daysInMonth;

        // Inicializar un array para almacenar los días del mes
        $daysOfMonth = [];

        // Generar la lista de días del mes
        for ($i = 0; $i < $numberOfDays; $i++) {
            $daysOfMonth[] = $startOfMonth->copy()->addDays($i);
        }

        $users = User::where('current_team_id',$tienda->id)->get();
        
        if ($users->count()>0) {
            return view('tiendas.horastrabajadores',compact('tienda','daysOfMonth','users'));
        } else {
            return redirect()->route('listado.trabajadores',$tienda);
        }
      
    }

    public function ingresohorastrabajadores(Tienda $tienda, $year, $month)
    {   

        return view('tiendas.horastrabajadores',compact('tienda'));
    }

    public function gastostienda(Tienda $tienda)
    {
        return view('tiendas.gastostienda',compact('tienda'));
    }

    public function listadotrabajadores(Tienda $tienda)
    {   $users = User::where('current_team_id',$tienda->id)->get();
        return view('tiendas.listadotrabajadores',compact('tienda','users'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Tienda $tienda)
    {
        return view('tiendas.edit',compact('tienda'));
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
    public function destroy($id)
    {
        //
    }
}

<?php

namespace App\Http\Livewire\Tienda;

use App\Models\Hora;
use App\Models\Tienda;
use App\Models\User;
use Carbon\Carbon;
use Livewire\Component;

class HorasTrabajadores extends Component
{   public $tienda, $hora_ingreso="10:00", $hora_salida="22:00", $colacion=1;

    public function mount($tienda_id){
        $this->tienda=Tienda::find($tienda_id);
    }
    public function render()
    {   
         // Obtener la fecha actual
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
 
         $users = User::where('current_team_id',$this->tienda->id)->get();

        return view('livewire.tienda.horas-trabajadores',compact('daysOfMonth','users'));
    }

    public function hora_create($user_id,$fecha){
        $this->validate([
            'hora_ingreso' => 'required|date_format:H:i',
            'hora_salida' => 'required|date_format:H:i',
        ]);

        $user=User::find($user_id);
        
        $hora=Hora::create([
            'fecha'=>$fecha,
            'user_id'=>$user->id,
            'hora_ingreso'=>$this->hora_ingreso,
            'hora_salida'=>$this->hora_salida
        ]);
     
        $this->tienda=Tienda::find($this->tienda->id);
    }
}

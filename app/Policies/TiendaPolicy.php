<?php

namespace App\Policies;

use App\Models\StaffTienda;
use App\Models\Tienda;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class TiendaPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function administred(User $user, Tienda $tienda){
       
        if (StaffTienda::where('user_id', $user->id)->where('tienda_id',$tienda->id)->where('rol','admin')->count()>0){
            return true;
        }else{
            return false;
        }   
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hora extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    // relacion uno a muchos inversa
    public function user(){
       return $this->BelongsTo('App\Models\User');
   }
   
}

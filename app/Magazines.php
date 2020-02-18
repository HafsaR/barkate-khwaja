<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Magazines extends Model
{
    protected $primarykey='id';
    protected $table='magazines';
    
    //
    public function user(){
        return $this->belongsTo('App\User');
       
    }
}

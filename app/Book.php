<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $primarykey='id';
    protected $table='books';
    
    //
    public function user(){
        return $this->belongsTo('App\User');
       
    }

}

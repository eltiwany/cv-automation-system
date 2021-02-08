<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hobby extends Model
{
    protected $table ='hobbies';
    public $primaryKey='id';
    public $timestamps ='true';


    public function user () {
        return $this->belongsTo('App\User');
    }


}

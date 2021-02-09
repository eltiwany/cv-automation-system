<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hobbies extends Model
{
    protected $table ='hobbies';
    public $primaryKey='id'; 
    public $timestamps ='true';


    public function personalInfomation (){

        return $this->belongsTo('App\PersonalInformation');
    }


}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Language extends Model
{
    protected $table ='languages';
    public $primaryKey='id';
    public $timestamps ='true';


    public function personalInfomation (){

        return $this->belongsTo('App\PersonalInformation');
    }

}

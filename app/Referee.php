<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Referees extends Model
{
    protected $table ='referees';
    public $primaryKey='id';
    public $timestamps ='true';

    public function personalInfomation (){

        return $this->belongsTo('App\PersonalInformation');
    }

}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WorkExperience extends Model
{
    protected $table ='work_experiences';
    public $primaryKey='id';
    public $timestamps ='true';


    public function user() {
        return $this->belongsTo('App\User');
    }
}

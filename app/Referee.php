<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Referee extends Model
{
    protected $table ='referees';
    public $primaryKey='id';
    public $timestamps ='true';

    public function user () {
        return $this->belongsTo('App\User');
    }

}

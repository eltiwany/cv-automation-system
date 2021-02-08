<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProjectAndResearch extends Model
{
    protected $table ='project_and_researches';
    public $primaryKey='id';
    public $timestamps ='true';

    public function user() {
        return $this->belongsTo('App\User');
    }

}

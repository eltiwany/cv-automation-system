<?php

namespace App;
use app\Language;
use Illuminate\Database\Eloquent\Model;

class PersonalInformation extends Model
{
protected $table ='personal_informations';
public $primaryKey='id';
public $timestamps ='true';


public function Language()
{
    return $this->hasMany('app\Language');
}




}

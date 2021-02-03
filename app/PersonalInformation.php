<?php

namespace App;

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
    public function Referees()
    {
        return $this->hasMany('app\Referees');
    }
public function ProjectandResearch()
{
    return $this->hasMany('app\project_and_Research');

}
    public function Hobbies()
    {
        return $this->hasMany('app\Hobbies');

    }




}

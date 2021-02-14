<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name', 'middle_name','last_name','email', 'password','user_id',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function personal_information() {
        return $this->hasMany('App\PersonalInformation');
    }

    public function language() {
        return $this->hasMany('App\Language');
    }

    public function referee() {
        return $this->hasMany('App\Referees');
    }

    public function project_and_research() {
        return $this->hasMany('App\project_and_Research');
    }

    public function hobby() {
        return $this->hasMany('App\Hobbies');

    }

    public function education_background() {
        return $this->hasMany('App\EducationBackGround');

    }

    public function work_experience() {
        return $this->hasMany('App\WorkExperience ');

    }
}

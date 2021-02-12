<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PersonalInformation;
use App\EducationBackGround;
use App\Hobby;
use App\Language;
use App\ProjectAndResearch;
use App\Referee;
use App\WorkExperience;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $stats = $this->get_user_stats();
        return view('home', compact('stats'));
    }

    public function get_user_stats() {
        
        $user_array = array();
        $user_id = auth()->user()->id;
        
        // Personal Information
        $personal_informations = PersonalInformation::where('user_id', $user_id);
        if ($personal_informations->exists())
            $personal_informations = array_push($user_array, [
                'url' => '/personal-information',
                'icon-classes' => 'fa fa-users',
                'name' => 'Personal Information',
                'percent' => $personal_informations->count() * 100,
                'description' => 'You have filled your information, make sure they are accurately as possible!'
                ]);
        else
            $personal_informations = array_push($user_array, [
                'url' => '/personal-information',
                'icon-classes' => 'fa fa-users',
                'name' => 'Personal Information',
                'percent' => $personal_informations->count() * 100,
                'description' => 'Start filling your personal informations!'
                ]);

        // Education BackGround
        $education_back_grounds = EducationBackGround::where('user_id', $user_id);
        if ($education_back_grounds->exists())
            $education_back_grounds = array_push($user_array, [
                'url' => '/education-background',
                'icon-classes' => 'fa fa-graduation-cap',
                'name' => 'Education Background',
                'percent' => intval($education_back_grounds->count()/3 * 100),
                'description' => $education_back_grounds->count() !== 3 ? $education_back_grounds->count() . ' educational background have been added, add more to perfect your CV' : 'Everything looks good here!'
                ]);
        else
            $education_back_grounds = array_push($user_array, [
                'url' => '/education-background',
                'icon-classes' => 'fa fa-graduation-cap',
                'name' => 'Education Background',
                'percent' => $education_back_grounds->count(),
                'description' => 'Start filling up at least one educational background'
                ]);

        // Language
        $languages = Language::where('user_id', $user_id);
        if ($languages->exists())
            $languages = array_push($user_array, [
                'url' => '/language',
                'icon-classes' => 'fa fa-globe',
                'name' => 'Languages',
                'percent' => intval($languages->count()/2 * 100),
                'description' => $languages->count() . ' language(s) added.'
                ]);
        else
            $languages = array_push($user_array, [
                'url' => '/language',
                'icon-classes' => 'fa fa-globe',
                'name' => 'Languages',
                'percent' => $languages->count(),
                'description' => 'No languages found, fill in atleast two.'
                ]);
        
        // Hobby
        $hobbies = Hobby::where('user_id', $user_id);
        if ($hobbies->exists())
            $hobbies = array_push($user_array, [
                'url' => '/hobbies',
                'icon-classes' => 'fa fa-smile-o',
                'name' => 'Hobbies',
                'percent' => intval($hobbies->count()/2 * 100),
                'description' => $hobbies->count() . ' hobbie(s) added.'
                ]);
        else
            $hobbies = array_push($user_array, [
                'url' => '/hobbies',
                'icon-classes' => 'fa fa-smile-o',
                'name' => 'Hobbies',
                'percent' => $hobbies->count(),
                'description' => 'No hobbies found, fill in atleast two.'
                ]);
            
        // Project And Research
        $project_and_researches = ProjectAndResearch::where('user_id', $user_id);
        if ($project_and_researches->exists())
            $project_and_researches = array_push($user_array, [
                'url' => '/project-research',
                'icon-classes' => 'fa fa-rocket',
                'name' => 'Project and Researches',
                'percent' => $project_and_researches->count(),
                'description' => $project_and_researches->count() . ' project/researche(s) have been added.'
                ]);
        else
            $project_and_researches = array_push($user_array, [
                'url' => '/project-research',
                'icon-classes' => 'fa fa-rocket',
                'name' => 'Project and Researches',
                'percent' => $project_and_researches->count(),
                'description' => 'No projects or researches found, add to strengthen your CV!'
                ]);

        // Work Experience
        $work_experiences = WorkExperience::where('user_id', $user_id);
        if ($work_experiences->exists())
            $work_experiences = array_push($user_array, [
                'url' => '/work-experience',
                'icon-classes' => 'fa fa-suitcase',
                'name' => 'Work Experiences',
                'percent' => intval($work_experiences->count()/2 * 100),
                'description' => $work_experiences->count() . ' work experience(s) have been added.'
                ]);
        else
            $work_experiences = array_push($user_array, [
                'url' => '/work-experience',
                'icon-classes' => 'fa fa-suitcase',
                'name' => 'Work Experiences',
                'percent' => $work_experiences->count(),
                'description' => 'No work experiences found, add at least two!'
                ]);

        // Referees
        $referees = Referee::where('user_id', $user_id);
        if ($referees->exists())
            $referees = array_push($user_array, [
                'url' => '/referees',
                'icon-classes' => 'fa fa-gavel',
                'name' => 'Referees',
                'percent' => intval($referees->count()/2 * 100),
                'description' => $referees->count() . ' referee(s) have been added.'
                ]);
        else
            $referees = array_push($user_array, [
                'url' => '/referees',
                'icon-classes' => 'fa fa-gavel',
                'name' => 'Referees',
                'percent' => $referees->count(),
                'description' => 'No referees found, add at least two!'
                ]);

        return $user_array;
        
    }
}

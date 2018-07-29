<?php

namespace App;

use \App\Skill;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;

class Work extends Model
{
    protected $fillable = [
        'company_name', 'position', 'location', 'starting_date', 'ending_date', 'current_job', 'description',
    ];


    public function skills()
    {	

    	return $this->belongsToMany('App\Skill');

    }

    public function addSkills($skills)
    {
    	if(strlen($skills) > 1) {
            $skills = Str::lower($skills);
            $skillarray = explode(',', $skills);
            foreach ($skillarray as $rawskill) {

                $skill = explode('@', $rawskill);
                if (Skill::where('name', $skill[1])->exists()) {
                    $this->skills()->attach(Skill::where('name', $skill[1])->first());
                }
                else {

                    $saved = $this->skills()->firstOrNew([
                        'category' => $skill[0],
                        'name' => $skill[1],
                    ]);
                    $saved->save();
                    $this->skills()->attach($saved);
                }

            
           }
        }
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Skill;
use Illuminate\Support\Str;

class Project extends Model
{

	 protected $fillable = [
        'title', 'subtitle', 'starting_date', 'ending_date', 'url', 'description',
    ];


    public function skills()
    {	

    	return $this->belongsToMany(Skill::class);

    }

    public function addSkills($skills)
    {
    	# code...
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

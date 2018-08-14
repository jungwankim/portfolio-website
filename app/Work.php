<?php

namespace App;

use \App\Skill;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;

class Work extends Model
{
    protected $fillable = [
        'company_name', 'short_name', 'position', 'location', 'starting_date', 'ending_date', 'current_job', 'description',
    ];

    protected $appends = ['skill_tags'];

    public function getSkillTagsAttribute()
    {
        $skillTag = $this->skills()->pluck('name')->all();
        return $this->attributes['skill_tags'] = $skillTag;
    }

    public function skills()
    {	

    	return $this->belongsToMany('App\Skill');

    }

    public function addSkills($skills)
    {
    	Skill::addSkills($this, $skills);
    }
}

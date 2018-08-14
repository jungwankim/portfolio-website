<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Skill;
use Illuminate\Support\Str;

class Project extends Model
{

	protected $fillable = [
        'short_name', 'title', 'subtitle', 'starting_date', 'ending_date', 'url', 'description',
    ];

    protected $appends = ['skill_tags'];

    public function getSkillTagsAttribute()
    {
        $skillTag = $this->skills()->pluck('name')->all();
        return $this->attributes['skill_tags'] = $skillTag;
    }


    public function skills()
    {	

    	return $this->belongsToMany(Skill::class);

    }

    public function addSkills($skills)
    {
        Skill::addSkills($this, $skills);
    }
}

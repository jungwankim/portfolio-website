<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class Skill extends Model
{

    protected $fillable = [
        'category', 'name', 'visible'
    ];

    protected $visible = [
        'category', 'name', 'visible'
    ];
    
    public function works()
    {	

    	return $this->belongsToMany('App\Work');

    }

    public function projects()
    {

    	return $this->belongsToMany('App\Project');

    }
    
    public static function addSkills($model, $skills) {
        if(strlen($skills) > 1) {
            $skills = Str::lower($skills);
            $skillarray = explode(',', $skills);
            foreach ($skillarray as $rawskill) {
                if(strlen($rawskill) > 1) {
                     $skill = explode('@', $rawskill);
                    if (Skill::where('name', $skill[1])->exists()) {
                        $model->skills()->attach(Skill::where('name', $skill[1])->first());
                    }
                    else {
                        $saved = $model->skills()->firstOrNew([
                            'category' => $skill[0],
                            'name' => $skill[1],
                        ]);
                        $saved->save();
                        $model->skills()->attach($saved);
                    }
                }
           }
        }
    }

    public function getRouteKeyName()
    {
    	return 'name';
    }
}

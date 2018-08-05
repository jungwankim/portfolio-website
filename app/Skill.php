<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Skill extends Model
{

    protected $fillable = [
        'category', 'name',
    ];

    protected $visible = [
        'category', 'name'
    ];
    
    public function works()
    {	

    	return $this->belongsToMany('App\Work');

    }

    public function projects()
    {

    	return $this->belongsToMany('App\Project');

    }
    
    public function getRouteKeyName()
    {
    	return 'name';
    }
}

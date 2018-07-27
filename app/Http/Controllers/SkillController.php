<?php

namespace App\Http\Controllers;

use App\Skill;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Str;

class SkillController extends Controller
{
    //
    public function __construct() {
    	$this->middleware('auth', ['except' => ['index']]);
    }

    public function addSkill(Request $request) {
    	$this->validate(request(), [

            'category' => 'required',
            'name' => 'required|unique:skills',

        ]);


    	$skill = Skill::create([
    		'category' => Str::lower($request->category),
    		'name' => Str::lower($request->name)
    	]);
    	return Redirect::back()->with('successMsg', 'Saved succesfully!');
    }

}

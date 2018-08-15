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
    	$this->middleware('auth', ['except' => ['index', 'show']]);
    }

    public function index(Skill $skill) {
        $skills =  Skill::all()->filter(function($ski) { return ($ski->projects()->count() + $ski->works()->count())>0;});
        $title = "My Skills";
        if (!($skill->exists)) {
            $skill = Skill::first();
        }
        return view('contents.skill', compact('skills', 'skill', 'title'));
    }

    public function show(Skill $skill) {
        $works = $skill->works()->pluck('id', 'company_name')->toArray();
        $projects = $skill->projects()->pluck('id', 'title')->toArray();
        $data = [
            'works' => $works,
            'projects' =>$projects,
        ];

        return $data;
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


    public function editSkill(Skill $skill, Request $request) {
        $skill->category = $request->category;
        $skill->name = $request->name;
        $skill->visible = $request->visible;
        $skill->save();
        return redirect()->route('edit')->with('successMsg', 'Saved succesfully!');
    }

    public function deleteSkill(Skill $skill) {
        $skill->works()->detach();
        $skill->projects()->detach();
        $skill->delete();
        return redirect()->route('edit')->with('successMsg', 'Deleted succesfully!');
    }


}

<?php

namespace App\Http\Controllers;

use App\Mail\Contact;
use App\Project;
use App\Skill;
use App\User;
use App\Work;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    
	public function __construct() {

        $this->middleware('auth')->except('sendEmail');
    }

    public function viewSkillForm(Skill $skill) {
    	return view('adminLayouts.skillForm', compact('skill'));
    }

    public function viewProjectForm(Project $project) {
    	return view('adminLayouts.projectForm', compact('project'));
    }

    public function viewWorkForm(Work $work) {
    	return view('adminLayouts.workForm', compact('work'));
    }

    public function viewEdit() {
        $works = Work::get();

        $skills = Skill::get();
        $projects = Project::get();
        return view('adminLayouts.edit', compact('works', 'skills', 'projects'));
    }

    public function sendEmail(Request $request)
    {
        $user = User::first();
        \Mail::to($user)->send(new Contact($request));
        return redirect()->back();
    }

}

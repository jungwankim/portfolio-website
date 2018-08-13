<?php

namespace App\Http\Controllers;

use App\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class ProjectController extends Controller
{
    //
    public function __construct() {
    	$this->middleware('auth', ['except' => ['index', 'show']]);
    }

    public function index(Project $project) {

        $projects = Project::all('id', 'short_name');
        $title = "My Projects";
        if (!($project->exists)) {
            $project = Project::first();
        }
        return view('contents.project', compact('projects', 'project', 'title'));
    }

    public function show(Project $project)
    { 
        return $project->toJson(JSON_PRETTY_PRINT);
    }

    public function addProject(Request $request) {

        $this->validate(request(), [

            'title' => 'required',
            'short_name' => 'required',
            'subtitle' => 'required',
            'starting_date' => 'nullable|date',
            'ending_date' => 'nullable|date',
            'url' => 'nullable',
            'description' => 'required',

        ]);


    	$project = Project::create(request(['title', 'short_name', 'subtitle', 'starting_date', 'ending_date', 'url','description']));
        $project->addSkills(request('skills'));
    	return Redirect::back()->with('successMsg', 'Saved succesfully!');
    }

    public function editProject(Project $project) {
        $project->fill(request(['title', 'short_name','subtitle', 'starting_date', 'ending_date', 'url','description']));
        $project->skills()->detach();
        $project->addSkills(request('skills'));
        $project->save();
        return redirect()->route('edit')->with('successMsg', 'Saved succesfully!');
    }
    
    public function deleteProject(Project $project) {
        $project->skills()->detach();
        $project->delete();
        return redirect()->route('edit')->with('successMsg', 'Deleted succesfully!');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Work;
use App\Project;
use App\Skill;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth')->except('index');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = "my portfolio";
        $works = Work::get();
        $projects = Project::get();
        $skills = Skill::orderBy('category')->get();
        return view('layouts.home', compact(['title', 'works', 'projects', 'skills']));
    }
}

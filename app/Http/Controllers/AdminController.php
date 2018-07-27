<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    
	public function __construct() {

        $this->middleware('auth');
    }

    public function viewSkillForm() {

    	return view('adminLayouts.skillForm');
   
    }

    public function viewProjectForm() {
    	return view('adminLayouts.projectForm');
    }

    public function viewWorkForm() {
    	return view('adminLayouts.workForm');
    }



}

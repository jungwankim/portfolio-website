<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Work; 
use Illuminate\Support\Facades\Redirect;

class WorkController extends Controller
{
    

    public function __construct() {
    	$this->middleware('auth', ['except' => ['index']]);
    }

    
    public function addWork(Request $request) {

        $this->validate(request(), [

            'company_name' => 'required',
            'position' => 'required',
            'location' => 'required',
            'starting_date' => 'required|date',
            'ending_date' => 'nullable|date',
            'description' => 'required',

        ]);


    	$work = Work::create(request(['company_name', 'position', 'location' , 'starting_date', 'ending_date', 'description']));
        $work->addSkills(request('skills'));
    	return Redirect::back()->with('successMsg', 'Saved succesfully!');
    }
}

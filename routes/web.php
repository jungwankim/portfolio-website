<?php

Route::get('/', 'HomeController@index');

Route::get('/home', function() {
    return redirect('/');
});

Route::get('/education', function () {
    return view('contents.education')->with('title','education');
});

Route::get('/works', 'WorkController@index');
Route::get('/works/{work}', 'WorkController@index');
Route::get('/works/work/{work}', 'WorkController@show');

Route::get('/projects', 'ProjectController@index');
Route::get('/projects/{project}', 'ProjectController@index');
Route::get('/projects/project/{project}', 'ProjectController@show');

Route::get('/skills', 'SkillController@index');
Route::get('/skills/{skill}', 'SkillController@index');
Route::get('/skills/skill/{skill}', 'SkillController@show');


Route::get('/search', function () {
    return view('welcome');
});

Route::post('/contact/submit', 'AdminController@sendEmail');


Route::get('/admin/form/work', 'AdminController@viewWorkForm');
Route::post('/admin/form/work', 'WorkController@addWork');

Route::get('/admin/form/project', 'AdminController@viewProjectForm');
Route::post('/admin/form/project', 'ProjectController@addProject');

Route::get('/admin/form/skill', 'AdminController@viewSkillForm');
Route::post('/admin/form/skill', 'SkillController@addSkill');


Route::get('/admin/edit', 'AdminController@viewEdit')->name('edit');

Route::get('/admin/edit/works/{work}', 'AdminController@viewWorkForm');
Route::post('/admin/edit/works/{work}', 'WorkController@editWork');
Route::get('/admin/delete/works/{work}', 'WorkController@deleteWork');


Route::get('/admin/edit/projects/{project}', 'AdminController@viewProjectForm');
Route::post('/admin/edit/projects/{project}', 'ProjectController@editProject');
Route::get('/admin/delete/projects/{project}', 'ProjectController@deleteProject');


Route::get('/admin/edit/skills/{skill}', 'AdminController@viewSkillForm');
Route::post('/admin/edit/skills/{skill}', 'SkillController@editSkill');
Route::get('/admin/delete/skills/{skill}', 'SkillController@deleteSkill');


Auth::routes();
Route::get('/logout', 'Auth\LoginController@logout')->name('logout' );

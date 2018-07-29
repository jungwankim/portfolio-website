<?php

Route::get('/', 'HomeController@index');

Route::get('/home', function() {
    return redirect('/');
});

Route::get('/education', function () {
    return view('welcome');
});

Route::get('/works', function () {
    return view('welcome');
});

Route::get('/projects', function () {
    return view('welcome');
});

Route::get('/skills', function () {
    return view('welcome');
});

Route::get('/works/{work}', function () {
    return view('welcome');
});

Route::get('/projects/{project}', function () {
    return view('welcome');
});

Route::get('/skills/{skill}', function () {
    return view('welcome');
});

Route::get('/search', function () {
    return view('welcome');
});


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

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

Auth::routes();

Route::get('/logout', 'Auth\LoginController@logout')->name('logout' );

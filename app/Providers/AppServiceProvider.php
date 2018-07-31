<?php

namespace App\Providers;

use App\Project;
use App\Skill;
use App\Work;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        view()->composer(['layouts.footer', 'layouts.home'], function($view) {

            $works = Work::get();
            $projects = Project::get();
            $skills = Skill::orderBy('category')->get();

            $data = [
                'skills' => $skills,
                'works' => $works,
                'projects' => $projects,
            ];

            $view->with('skills', $skills)->with('projects', $projects)->with('works', $works);

        });

    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}

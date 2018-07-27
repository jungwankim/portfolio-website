<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSkillsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('skills', function (Blueprint $table) {
            $table->increments('id');
            $table->string('category')->nullable();
            $table->string('name')->unique() ;
            $table->timestamps();
        });

        Schema::create('project_skill', function (Blueprint $table) {
            $table->integer('project_id');
            $table->integer('skill_id');
            $table->primary(['project_id' , 'skill_id']);
        });

        Schema::create('skill_work', function (Blueprint $table) {
            $table->integer('skill_id');
            $table->integer('work_id');
            $table->primary(['skill_id' , 'work_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('skills');          
        Schema::dropIfExists('project_skill');
        Schema::dropIfExists('skill_work');

    }
}

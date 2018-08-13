<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddShortColumns extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('works', function (Blueprint $table) {
        //
            $table->string('short_name')->nullable();
        });

        Schema::table('projects', function (Blueprint $table) {
        //
            $table->string('short_name')->nullable();
        });


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        
        Schema::table('works', function (Blueprint $table) {
            $table->dropColumn('short_name');
        });

         Schema::table('projects', function (Blueprint $table) {
            $table->dropColumn('short_name');
        });
    }
}

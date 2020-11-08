<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLevelTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('level', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama')->nullable();
            $table->string('desk')->nullable();
            // $table->string('email|username|no_hp')->unique();  <-- data perbari unique
            // $table->string('desk')->unique()->nullable();   <--- data unique
            // $table->integer('nilai')->default(30);
            // $table->boolean('status')->default(0|1);
            $table->timestamps();
        });
    }

    // $tableLevel = [{
    //     id_level : 1,
    //     name : 'admin'
    // }, {
    //     id_level : 2,
    //     name : 'user',
    // }];

    // $tableUser = [{
    //     name : 'name_1',
    //     id_level : 1,
    // }, {
    //     name : 'name_2',
    //     id_level : 2,
    // },{
    //     name : 'name_2',
    //     id_level : 1,
    // }]

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('level');
    }
}

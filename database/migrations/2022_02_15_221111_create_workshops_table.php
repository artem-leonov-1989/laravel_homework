<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWorkshopsTable extends Migration
{
    public function up()
    {
        Schema::create('workshops', function (Blueprint $table) {
            $table->id();
            $table->string('name', 20);
            $table->integer('division_code')->unsigned()->unique();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('workshops');
    }
}
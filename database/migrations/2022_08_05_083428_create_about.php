<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAbout extends Migration
{
    public function up()
    {
        Schema::create('abouts', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string("image")->nullable();
            $table->string("tagline");
            $table->text("description");
        });
    }

    public function down()
    {
        Schema::dropIfExists('about');
    }
}

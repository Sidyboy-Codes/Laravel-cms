<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use phpDocumentor\Reflection\Types\Nullable;

class CreateExperience extends Migration
{
    public function up()
    {
        Schema::create('experiences', function (Blueprint $table) {
            $table->id();
            // $table->timestamps();
            $table->string("image")->nullable();
            $table->string("company_name");
            $table->string("position");
            $table->string("job_role");
            $table->date("start_date");
            $table->date("end_date");
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('experience');
    }
}

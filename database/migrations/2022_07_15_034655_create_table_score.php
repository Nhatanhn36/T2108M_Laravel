<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableScore extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('score', function (Blueprint $table) {
            $table->id("ScoreID");
            $table->unsignedTinyInteger("Score");
            $table->string("Result",50);
            $table->string("StudentID",20);
            $table->string("SubjectID",20);
            $table->timestamps();
            $table->foreign("StudentID")->references("StudentID")->on("student");
            $table->foreign("SubjectID")->references("SubjectID")->on("subject");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('score');
    }
}

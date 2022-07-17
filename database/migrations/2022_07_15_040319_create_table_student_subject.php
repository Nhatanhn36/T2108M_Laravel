<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableStudentSubject extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('studentSubject', function (Blueprint $table) {
            $table->string("StudentID",20);
            $table->string("SubjectID",20);
            $table->timestamps();
            $table->foreign("StudentID")->references("StudentID")->on("student");
            $table->foreign("SubjectID")->references("SubjectID")->on("subject");
            $table->unique(["StudentID","SubjectID"]);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('studentSubject');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentSubject extends Model
{
    use HasFactory;
    protected $table = "studentsubject";

    protected $fillable = [
        "StudentID",
        "SubjectID",
        "created_at",
        "updated_at"
    ];
}

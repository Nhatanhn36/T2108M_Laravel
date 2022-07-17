<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $table = "student";
    protected $primaryKey = "StudentID";
    protected $keyType = "string";

    protected $fillable = [
        "StudentName",
        "DateOfBirth",
        "ClassID",
        "created_at",
        "updated_at"
    ];
}

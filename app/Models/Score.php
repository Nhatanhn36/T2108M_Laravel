<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Score extends Model
{
    use HasFactory;
    protected $table = "score";
    protected $primaryKey = "ScoreID";

    protected $fillable = [
        "Score",
        "Result",
        "StudentID",
        "SubjectID",
        "created_at",
        "updated_at"
    ];
}

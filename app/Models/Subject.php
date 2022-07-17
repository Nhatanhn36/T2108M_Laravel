<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    use HasFactory;
    protected $table = "subject";
    protected $primaryKey = "SubjectID";
    protected $keyType = "string";

    protected $fillable = [
        "SubjectName",
        "created_at",
        "updated_at"
    ];
}

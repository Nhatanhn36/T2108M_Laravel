<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classes extends Model
{
    use HasFactory;
    protected $table = 'classes';
    protected $primaryKey = 'ClassID';
    protected $keyType = 'string';

    protected $fillable = [
        "ClassID",
        "ClassName",
        "Room",
        "created_at",
        "updated_at"
    ];

    public function student(){
        return $this->hasMany(Student::class,"ClassID","ClassID");
    }

    public function scopeSearch($query, $Search = ''){
        if ($Search != null && $Search != ''){
            return $query->where("ClassName","like",'%'.$Search.'%');
        }
        return $query;
    }
}

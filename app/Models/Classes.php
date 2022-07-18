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
        "ClassName",
        "Room",
        "created_at",
        "updated_at"
    ];

    public function students(){
        return $this->hasMany(Student::class,"ClassID","ClassID");
    }
}

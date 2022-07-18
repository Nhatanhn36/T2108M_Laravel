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

    public function classes(){
        // return 1 object Classes
        //return Classes::where("ClassID",$this->ClassID)->first();
        return $this->belongsTo(Classes::class,"ClassID","ClassID");
    }

    public function scopeSearch($query,$Search = ''){
        if($Search != null && $Search != ''){
            return $query->where("StudentName","like",'%'.$Search.'%');
        }
        return $query;
    }

    public function scopeClassFilter($query,$cid = ''){
        if ($cid != null && $cid != ''){
            return $query->where("ClassID",$cid);
        }
        return $query;
    }
    public function scopeDoBFrom($query,$DoBFrom = ''){
        if ($DoBFrom != null && $DoBFrom != ''){
            return $query->where("DateOfBirth",'>=',$DoBFrom);
        }
        return $query;
    }
     public function scopeDoBTo($query,$DoBTo = ''){
        if ($DoBTo != null && $DoBTo !=''){
            return $query->where("DateOfBirth",'<=',$DoBTo);
        }
        return $query;
     }
}

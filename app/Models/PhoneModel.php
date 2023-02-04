<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PhoneModel extends Model
{
    use HasFactory;
    protected $table = 'phone';

    public function studentsGet(){
      return $this->belongsTo(StudentModel::class,'student_id','id');
    }
}

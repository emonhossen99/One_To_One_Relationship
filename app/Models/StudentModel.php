<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentModel extends Model
{
    use HasFactory;
    protected $table = 'students';

   public function phoneNumber()
   {
    return $this->hasOne(PhoneModel::class,'student_id','id');
   }
}

<?php

use App\Models\PhoneModel;
use App\Models\StudentModel;
use Illuminate\Support\Facades\Route;


Route::get('/',function(){
  $student = StudentModel::find(1);
  return $student->phoneNumber;
});

Route::get('/home',function(){
  $student = PhoneModel::find(1);
  return $student->studentsGet;
});

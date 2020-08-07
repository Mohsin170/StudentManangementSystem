<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $primaryKey = 'RollNo';
    protected $fillable = [
        'RollNo', 'FirstName', 'LastName','Age','Speciality'
    ];
}

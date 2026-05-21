<?php

namespace App\Models;
use Illuminate\Database\Eloquent\HasFactory;
use Illuminate\Database\Eloquent\Model;

class employeemngt extends Model
{
protected $table  ='employeemngt';


         protected $fillable = [
        'fname',
        'lname',
        'mname',
         'add',
          'dob',
          'contact'

    ];
}

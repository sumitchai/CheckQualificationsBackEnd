<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Check extends Model
{
    protected $table = 'test';    /**  ชื่อ db */
    protected $fillable = ['name','type','oct','course_id'];  /**  ข้อมูลใน เทเบิล */
    // protected $fillable = ['NAME',
    //                         'SUR_NAME',
    //                         'ID_STUDENT',
    //                         'ID_SSN',
    //                         'companyname',
    //                         'namecheck',
    //                         'objective',
    //                         'department',
    //                         'e_mail',
    //                         'phone_number'];
}

 
<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Check extends Model
{
    protected $table = 'checkindividual';    /**  ชื่อ db */
    protected $fillable = ['NAME','ID_STUDENT','ID_SSN','companyname','namecheck','Objective','department','e_mail','phone_number','Objective_1','department_1'];  /**  ข้อมูลใน เทเบิล */
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

 
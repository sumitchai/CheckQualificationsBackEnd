<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Checkup extends Model
{
    protected $table = 'checkindividual';    /**  ชื่อ table */
    protected $fillable = ['NAME_TH','NAME_EN','STUDENT_CODE','CITIZEN_ID','companyname','namecheck','Objective','department','e_mail','phone_number','Objective_1','department_1','created_at'];  /**  ข้อมูลใน เทเบิล */
}

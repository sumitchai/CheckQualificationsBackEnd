<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Checkup extends Model
{
    protected $table = 'checkindividual';    /**  ชื่อ table */
    protected $fillable = ['NAME','ID_STUDENT','ID_SSN','companyname','namecheck','Objective','department','e_mail','phone_number','Objective_1','department_1'];  /**  ข้อมูลใน เทเบิล */
}

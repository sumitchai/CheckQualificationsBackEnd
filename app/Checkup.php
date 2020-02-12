<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Checkup extends Model
{
    protected $table = 'checkindividual';    /**  ชื่อ table */
<<<<<<< HEAD
    protected $fillable = ['NAME','SUR_NAME','ID_STUDENT','ID_SSN','companyname','namecheck','Objective','department','e_mail','phone_number','Objective_1','department_1','created_at'];  /**  ข้อมูลใน เทเบิล */
=======
    protected $fillable = ['NAME','ID_STUDENT','ID_SSN','companyname','namecheck','Objective','department','e_mail','phone_number','Objective_1','department_1'];  /**  ข้อมูลใน เทเบิล */
>>>>>>> bebbd82b6e360b1f6d14b355f113a82461c64afb
}

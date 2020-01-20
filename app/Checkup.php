<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Checkup extends Model
{
    protected $table = 'checkindividual';    /**  ชื่อ table */
    protected $fillable = ['NAME','SUR_NAME','ID_STUDENT','ID_SSN','companyname','namecheck','Objective','department','e_mail','phone_number'];  /**  ข้อมูลใน เทเบิล */
}

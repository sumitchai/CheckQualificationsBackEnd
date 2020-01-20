<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class upreg extends Model
{
    protected $table = 'VW_VOQ_COURSE';    /**  ชื่อ db */
    protected $fillable = ['COURSE_NAME_TH','COURSE_ID'];  /**  ข้อมูลใน เทเบิล */
}

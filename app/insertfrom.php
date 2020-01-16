<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class insertfrom extends Model
{
    protected $table = ['NAME','SUR_NAME','ID_STUDENT','ID_SSN','companyname','namecheck','objective','department','e_mail','phone_number'];

    protected $fillable = ['NAME',
    'SUR_NAME',
    'ID_STUDENT',
    'ID_SSN',
    'companyname',
    'namecheck',
    'objective',
    'department',
    'e_mail',
    'phone_number'];
}

// $table->string('NAME');
// $table->string('SUR_NAME');
// $table->string('ID_STUDENT');
// $table->string('ID_SSN');
// $table->string('companyname');
// $table->string('namecheck');
// $table->string('Objective');
// $table->string('department');
// $table->string('e_mail');
// $table->string('phone_number');
// $table->timestamps();       
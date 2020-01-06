<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class grauateController extends Controller
{
    public function seclectgrauate() {
        $result=DB::select('SELECT COURSE_CODE,COURSE_ID FROM VW_VOQ_COURSE');
        return $result ;
}

}

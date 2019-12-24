<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class grauateController extends Controller
{
    public function seclectgrauate() {
    $result=DB::select('select * from grauate');
    return $result ;
}

}

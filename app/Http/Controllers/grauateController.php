<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class grauateController extends Controller
{
    public function seclectgrauate() {
        $result=DB::select('SELECT VW_VOQ_COURSE.COURSE_NAME_EN,VW_VOQ_STD_GRADUATE.NAME_EN
                            FROM VW_VOQ_STD_GRADUATE
                            JOIN VW_VOQ_COURSE ON VW_VOQ_STD_GRADUATE.COURSE_ID=VW_VOQ_COURSE.COURSE_ID;');
                return $result ;
    }

    public function seclectgrauate01() {
        // จำนวนนิสิตที่อยู่ในหลักสูตร
       $DEGREE_CODE =  (isset($_GET['degree']))?$_GET['degree']:3;
       $result1=DB::select('SELECT VW_VOQ_COURSE.COURSE_NAME_EN,COUNT(VW_VOQ_COURSE.COURSE_NAME_EN) as COUNT_STUDENT
                            FROM VW_VOQ_STD_GRADUATE 
                            JOIN VW_VOQ_COURSE ON VW_VOQ_STD_GRADUATE.COURSE_ID=VW_VOQ_COURSE.COURSE_ID
                            WHERE VW_VOQ_STD_GRADUATE.DEGREE_CODE = '.$DEGREE_CODE.'
                            GROUP BY COURSE_NAME_EN'); 

                return  view('Home',["course"=>$result1,'degree'=>$DEGREE_CODE]);
    }

        public function seclectgrauate02() {
        $result = DB::table('VW_VOQ_STD_GRADUATE')
        ->join('VW_VOQ_COURSE','VW_VOQ_STD_GRADUATE.COURSE_NAME_TH', '=', 'VW_VOQ_STD_GRADUATE.COURSE_ID')
        ->select('VW_VOQ_COURSE.COURSE_ID','VW_VOQ_STD_GRADUATE.COURSE_NAME_TH')
        ->get();
        return  view('Home',[""=>$result]);
    }
    
    
    
   
}


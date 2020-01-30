<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Checkup;
use DB;

class CheckController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Checkup::get(); 
        $datas = DB::connection('sqlsrv')->table('VW_VOQ_STD_GRADUATE')->get();
        return view('Checkindividual',['data'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $check = new Checkup();
        print_r($request->all());
        $check->fill($request->all()); 
        $check->save();
        return view('dataindividual');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {   
        $student_code =  (isset($_GET['$student_code']))?$_GET['$student_code']:0;
        $name_th =  (isset($_GET['name_th']))?$_GET['name_th']:0;
        $citizen_id =  (isset($_GET['citizen_id']))?$_GET['citizen_id']:0;
        $data = DB::connection('sqlsrv')->table('VW_VOQ_STD_GRADUATE')
        ->Join('VW_VOQ_COURSE','VW_VOQ_COURSE.COURSE_ID','=','VW_VOQ_STD_GRADUATE.COURSE_ID')
        ->select('NAME_TH','COURSE_NAME_TH','FACULTY_NAME_TH','ACAD_YEAR','GRADUATE_DATE',
                 'NAME_EN','COURSE_NAME_EN','FACULTY_NAME_EN')
        ->where('NAME_TH','=',$name_th)
        ->where('STUDENT_CODE','=',$student_code)
        ->where('CITIZEN_ID','=',$citizen_id)
        ->get();
        return view('dataindividual',['datas'=>$data,'student_code'=>$student_code,'name_th'=>$name_th,'citizen_id',$citizen_id]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

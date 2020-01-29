<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class insertController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $DEGREE_CODE =  (isset($_GET['degree']))?$_GET['degree']:0;
        $data = DB::connection('sqlsrv')->table('VW_VOQ_STD_GRADUATE')
        ->Join('VW_VOQ_COURSE','VW_VOQ_COURSE.COURSE_ID','=','VW_VOQ_STD_GRADUATE.COURSE_ID')
        ->select(DB::Raw('COURSE_NAME_TH, COUNT(*) as count'))
        ->where('DEGREE_CODE','=',$DEGREE_CODE)
        ->groupBy('COURSE_NAME_TH')
        ->orderBy('count')
        ->get();
        return  view('Check_course',["course"=>$data,'degree'=>$DEGREE_CODE]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
     
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = DB::connection('sqlsrv')->table('VW_VOQ_STD_GRADUATE')
        ->Join('VW_VOQ_COURSE','VW_VOQ_COURSE.COURSE_ID','=','VW_VOQ_STD_GRADUATE.COURSE_ID')
        ->select('STUDENT_CODE','NAME_TH','ACAD_YEAR','COURSE_NAME_TH')
        ->where('COURSE_NAME_TH',$id)
        ->where('ACAD_YEAR', '>=', 2553)
        ->orderBy('ACAD_YEAR')
        ->get();
        return view('SelectThailist',['data'=>$data]);
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

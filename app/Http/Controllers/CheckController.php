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
        
        return view('Checkindividual');
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
    public function search(Request $request)
    {
      

      $CITIZEN_ID = $request->get('CITIZEN_ID') ;
      $NAME_TH = $request->get('NAME_TH') ;
      $STUDENT_CODE = $request->get('STUDENT_CODE') ;
      if(isset($CITIZEN_ID)) {
        $posts = DB::connection('sqlsrv')->table('VW_VOQ_STD_GRADUATE')
      ->Join('VW_VOQ_COURSE','VW_VOQ_COURSE.COURSE_ID','=','VW_VOQ_STD_GRADUATE.COURSE_ID')
      
      ->where('CITIZEN_ID',$CITIZEN_ID )
      
      ->paginate();
      }
      elseif(isset($NAME_TH)){
        $posts = DB::connection('sqlsrv')->table('VW_VOQ_STD_GRADUATE')
        ->Join('VW_VOQ_COURSE','VW_VOQ_COURSE.COURSE_ID','=','VW_VOQ_STD_GRADUATE.COURSE_ID')
        ->where('NAME_TH',$NAME_TH)
        
        ->paginate();
    }
    else{
        $posts = DB::connection('sqlsrv')->table('VW_VOQ_STD_GRADUATE')
        ->Join('VW_VOQ_COURSE','VW_VOQ_COURSE.COURSE_ID','=','VW_VOQ_STD_GRADUATE.COURSE_ID')
        
        ->where('STUDENT_CODE',$STUDENT_CODE )
        ->paginate();
    }
      
      return $posts->toJson();
    //   $posts = DB::connection('sqlsrv')->table('VW_VOQ_STD_GRADUATE')
    //   ->Join('VW_VOQ_COURSE','VW_VOQ_COURSE.COURSE_ID','=','VW_VOQ_STD_GRADUATE.COURSE_ID')
    //   ->where('NAME_TH','like','%'.$NAME_TH.'%')
    //   ->orWhere('CITIZEN_ID','like','%'.$CITIZEN_ID.'%' )
    //   ->orWhere('STUDENT_CODE','like','%'.$STUDENT_CODE.'%' )
    //   ->paginate();
      
    //           return  view('dataindividual',['posts'=>$posts]);
      
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $posts = new Checkup();
        print_r($request->all());
        $posts->fill($request->all()); 
        $posts->save();
        return \redirect('dataindividual');
    }
    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {   

        // $student_code =  (isset($_GET['$student_code']))?$_GET['$student_code']:0;
        // $name_th =  (isset($_GET['name_th']))?$_GET['name_th']:0;
        // $citizen_id =  (isset($_GET['citizen_id']))?$_GET['citizen_id']:0;
        // $data = DB::connection('sqlsrv')->table('VW_VOQ_STD_GRADUATE')
        // ->Join('VW_VOQ_COURSE','VW_VOQ_COURSE.COURSE_ID','=','VW_VOQ_STD_GRADUATE.COURSE_ID')
        // ->select('NAME_TH','COURSE_NAME_TH','FACULTY_NAME_TH','ACAD_YEAR','GRADUATE_DATE',
        //      'NAME_EN','COURSE_NAME_EN','FACULTY_NAME_EN')
        //  ->where('NAME_TH','=',$name_th)
        //  ->where('STUDENT_CODE','=',$student_code)
        //  ->where('CITIZEN_ID','=',$citizen_id)
        // ->get();
        // return view('dataindividual',['datas'=>$data,'student_code'=>$student_code,'name_th'=>$name_th,'citizen_id',$citizen_id]);
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

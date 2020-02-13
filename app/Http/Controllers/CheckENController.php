<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Checkup;

class CheckENController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        return view('CheckindividualEN');
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

    public function search(Request $request)
    {
      

      $CITIZEN_ID = $request->get('CITIZEN_ID') ;
      $NAME_EN = $request->get('NAME_TH') ;
      $STUDENT_CODE = $request->get('STUDENT_CODE') ;
      if(isset($CITIZEN_ID)) {
        $posts = DB::connection('sqlsrv')->table('VW_VOQ_STD_GRADUATE')
      ->Join('VW_VOQ_COURSE','VW_VOQ_COURSE.COURSE_ID','=','VW_VOQ_STD_GRADUATE.COURSE_ID')
      ->select('VW_VOQ_STD_GRADUATE.ACAD_YEAR','VW_VOQ_STD_GRADUATE.NAME_TH','VW_VOQ_STD_GRADUATE.FACULTY_NAME_TH','VW_VOQ_STD_GRADUATE.GRADUATE_DATE',
      'VW_VOQ_COURSE.COURSE_NAME_TH','VW_VOQ_COURSE.COURSE_NAME_EN','VW_VOQ_STD_GRADUATE.NAME_EN','VW_VOQ_STD_GRADUATE.FACULTY_NAME_EN')
      ->where('CITIZEN_ID',$CITIZEN_ID )->get();
      
    //   ->paginate();
      }
      elseif(isset($NAME_EN)){
        $posts = DB::connection('sqlsrv')->table('VW_VOQ_STD_GRADUATE')
        ->Join('VW_VOQ_COURSE','VW_VOQ_COURSE.COURSE_ID','=','VW_VOQ_STD_GRADUATE.COURSE_ID')
        ->select('VW_VOQ_STD_GRADUATE.ACAD_YEAR','VW_VOQ_STD_GRADUATE.NAME_TH','VW_VOQ_STD_GRADUATE.FACULTY_NAME_TH','VW_VOQ_STD_GRADUATE.GRADUATE_DATE',
        'VW_VOQ_COURSE.COURSE_NAME_TH','VW_VOQ_COURSE.COURSE_NAME_EN','VW_VOQ_STD_GRADUATE.NAME_EN','VW_VOQ_STD_GRADUATE.FACULTY_NAME_EN')
        ->where('NAME_EN',$NAME_TH)->get();
        
        // ->paginate();
    }
    else{
        $posts = DB::connection('sqlsrv')->table('VW_VOQ_STD_GRADUATE')
        ->Join('VW_VOQ_COURSE','VW_VOQ_COURSE.COURSE_ID','=','VW_VOQ_STD_GRADUATE.COURSE_ID')
        ->select('VW_VOQ_STD_GRADUATE.ACAD_YEAR','VW_VOQ_STD_GRADUATE.NAME_TH','VW_VOQ_STD_GRADUATE.FACULTY_NAME_TH','VW_VOQ_STD_GRADUATE.GRADUATE_DATE',
        'VW_VOQ_COURSE.COURSE_NAME_TH','VW_VOQ_COURSE.COURSE_NAME_EN','VW_VOQ_STD_GRADUATE.NAME_EN','VW_VOQ_STD_GRADUATE.FACULTY_NAME_EN')
        ->where('STUDENT_CODE',$STUDENT_CODE )->get();
        // ->paginate();
    }
      
      $result = json_encode($posts);
      Session::put('posts', $result);
    //    return  view('dataindividual',['posts'=>$posts]);
    //   $posts = DB::connection('sqlsrv')->table('VW_VOQ_STD_GRADUATE')
    //   ->Join('VW_VOQ_COURSE','VW_VOQ_COURSE.COURSE_ID','=','VW_VOQ_STD_GRADUATE.COURSE_ID')
    //   ->where('NAME_TH','like','%'.$NAME_TH.'%')
    //   ->orWhere('CITIZEN_ID','like','%'.$CITIZEN_ID.'%' )
    //   ->orWhere('STUDENT_CODE','like','%'.$STUDENT_CODE.'%' )
    //   ->paginate();
      
    //           return  view('dataindividual',['posts'=>$posts]);
      
    }



    public function store(Request $request)
    {
        
        $posts = new Checkup();
        // print_r($request->all());

        $posts->NAME_TH = $request->input('NAME_TH');
        $posts->STUDENT_CODE = $request->input('STUDENT_CODE');
        $posts->CITIZEN_ID = $request->input('CITIZEN_ID');
        $posts->companyname = $request->input('companyname');
        $posts->namecheck = $request->input('namecheck');
        $posts->Objective = $request->input('Objective');
        $posts->Objective_1 = $request->input('Objective_1');
        $posts->department = $request->input('department');
        $posts->department_1 = $request->input('department_1');
        $posts->e_mail = $request->input('e_mail');
        $posts->phone_number = $request->input('phone_number');
        
        

        //$posts->fill($request->all()); 
        $posts->save();
        

        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    public function showResult(){
        
        $result = Session::get('posts');
        $final = json_decode($result);
        
        return view('dataindividual',['posts'=>$final]);
    }

    public function show($id)
    {
        return view('dataindividual');
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

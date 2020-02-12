<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()  /**  แสดงข้อมูล */
    {
        return view('/searchform');
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
      $search = $request->get('search') ;
      $post = DB::connection('sqlsrv')->table('VW_VOQ_STD_GRADUATE')
      ->where('STUDENT_CODE','like', '%'.$search.'%' )
      ->paginate(5);
              return view('dataindividual',['post'=>$post]);
      
    }
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
    public function show($id)   /**  แสดงรายละเอียดด้วยการหาตามคอร์ดไอดี */
    {
<<<<<<< HEAD
       // $id = $_GET['id'];
        // $data = \DB::table('test')->where('course_id',$id)->get();
        // return view('book',['data'=>$data]);
=======
        $id = $_GET['id'];
        $data = \DB::table('test')->where('course_id',$id)->get();
        return view('book',['data'=>$data]);
>>>>>>> bebbd82b6e360b1f6d14b355f113a82461c64afb
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

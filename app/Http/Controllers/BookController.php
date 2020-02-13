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

    function action(Request $request)
    {
     if($request->ajax())
     {
      $output = '';
      $query = $request->get('query');
      if($query != '')
      {
       $data = DB::connection('sqlsrv')->table('VW_VOQ_STD_GRADUATE')
         ->Join('VW_VOQ_COURSE','VW_VOQ_COURSE.COURSE_ID','=','VW_VOQ_STD_GRADUATE.COURSE_ID')
         ->where('NAME_TH', 'like', '%'.$query.'%')
         ->orWhere('CITIZEN_ID', 'like', '%'.$query.'%')
         ->orWhere('STUDENT_CODE', 'like', '%'.$query.'%')
         ->get();
         
      }
      else
      {
       $data = DB::table('tbl_customer')
         ->orderBy('CustomerID', 'desc')
         ->get();
      }
      $total_row = $data->count();
      if($total_row > 0)
      {
       foreach($data as $row)
       {
        $output .= '
        <tr>
         
         <td > '.$row->NAME_TH.'</td>
         <td>'.$row->COURSE_NAME_TH.'</td>
         <td>'.$row->FACULTY_NAME_TH.'</td>
         <td>'.$row->ACAD_YEAR.'</td>
         <td>'.$row->GRADUATE_DATE.'</td>
         
        </tr>
        ';
       }
      }
      else
      {
       $output = '
       <tr>
        <td align="center" colspan="5">No Data Found</td>
       </tr>
       ';
      }
      $data = array(
       'table_data'  => $output,
       'total_data'  => $total_row
      );

      echo json_encode($data);
     }
    }



    // public function search(Request $request)
    // {
    //   $search = $request->get('search') ;
    //   $post = DB::connection('sqlsrv')->table('VW_VOQ_STD_GRADUATE')
    //   ->where('STUDENT_CODE','like', '%'.$search.'%' )
    //   ->paginate(5);
    //           return view('dataindividual',['post'=>$post]);
      
    // }
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
        $id = $_GET['id'];
        $data = \DB::table('test')->where('course_id',$id)->get();
        return view('book',['data'=>$data]);
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

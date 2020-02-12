<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Check;
class TestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()  /**  ฟังก์ชั่นแสดงข้อมูล */
    {
        $data = Check::get(); 
        return view('test',['data'=>$data]);
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
    public function store(Request $request)   /**  เก็บข้อมูล */
    {
         $check = new Check();
         $check->fill($request->all()); 
         $check->save();
         return \redirect('/test');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {  
        $update = Check::find($id);
        $data = Check::get(); 
        return view('test',['data'=>$data,'update'=>$update]);
         
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) /**  เก็บข้อมูลจากหน้าอัพเดท */ 
    {
        $check = Check::find($id);
        $check->fill($request->all()); 
        $check->save(); 
        return \redirect('/test');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $check = Check::find($id);
        $check->destroy($id);
         
        return \redirect('/test');
    }
}

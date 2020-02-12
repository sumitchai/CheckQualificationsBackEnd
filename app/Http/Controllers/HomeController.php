<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
<<<<<<< HEAD
        $admin = Checkup::get(); 
        $datas = DB::connection('mysql')->table('checkindividual')->get();
        return view('home',['admin'=>$admin]);
        
=======
        $admin = DB::connection('mysql')->table('checkindividual')
        ->get();
        return view('/home',['admin'=>$admin]);
>>>>>>> bebbd82b6e360b1f6d14b355f113a82461c64afb
    }
}

<?php

namespace App\Http\Controllers;

use App\Lodge;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class indexController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
   

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        //return view('home');
        $lodges = Lodge::latest()->paginate(5);
  
        // return view('home')->with('lodges', $lodges);
        return view('home',compact('lodges'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function landingPage()
    {
        //return view('home');
        $lodges = Lodge::latest()->paginate(6);
  
        // return view('home')->with('lodges', $lodges);
        return view('homepage',compact('lodges'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function getLodge($id)
    {
        $message = DB::table('lodges')->where('id',$id)->first();
        return view('ajax-lodge',['lodge'=>$lodge]);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profile;
use App\Models\Work_experience;
use App\Models\Education;
use Auth;


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
     * @return \Illuminate\Http\Response
     */
    public function index()

    {
        $user_id=Auth::user()->id;
        $count=Profile::where('user_id', $user_id)->count();
        $cwork=Work_experience::where('user_id', $user_id)->count();
        $ceducate=Education::where('user_id', $user_id)->count();
        $profile=Profile::find($user_id);
        $works=Work_experience::where('user_id',$user_id)->get();
        
        $educates=Education::where('user_id',$user_id)->get();
        
        //where('user_id', $user_id)->first();
        //$artikel =  Artikel::where('category_id', '1')->first();
        //$artikel = Artikel::;
        return view('home', compact('count','profile','cwork','works','educates','ceducate'));
    }
}

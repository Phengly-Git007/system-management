<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Throwable;

class HomeController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('home');
    }

    public function localization(Request $request){

        try{
            if($request->kh){
                return redirect()->back()->withCookie(cookie(config('app.locale_cookie'),'kh',10000));
            }
            else{
                return redirect()->back()->withCookie(cookie(config('app.locale_cookie'),'en',10000));
            }
        }catch(Throwable $e){
            return redirect('/home');
        }
        return redirect('/home');
    }
}

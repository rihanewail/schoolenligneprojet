<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        $role=Auth::user()->usertype;
        if ($role=="1")

        {
return view('layouts.app3')  ; }
        if ($role=="2") {
    return view('layouts.app4')  ; }
         if ($role=="3") {
        return view('layouts.app5')  ; }
      else {
            return view('layouts.app2')  ;      }

        }
    }


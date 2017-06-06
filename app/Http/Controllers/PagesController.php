<?php

namespace trabalho\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    
    public function home(){
        return view('pages.home');
    }
}

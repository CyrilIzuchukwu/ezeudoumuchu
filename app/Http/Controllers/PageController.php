<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    //

    public function contact()
    {
        return view('contact');
    }



    public function funeralProgram()
    {
        return view('funeral-program');
    }
}

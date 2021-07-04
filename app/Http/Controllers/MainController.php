<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    function viewRegisteredVet(){
        return view('indexVet');
    }

    function dashboard(){
        return view('index');
    }
}

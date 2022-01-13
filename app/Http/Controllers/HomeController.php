<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comics;
class HomeController extends Controller
{
    function index(){
        $comics= Comics::all();
        //dump($comics);

        return view("comics.index", compact('comics'));
    }
}

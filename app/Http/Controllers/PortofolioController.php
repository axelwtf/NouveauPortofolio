<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;
use App\Logo;
use App\SousLogo;
class PortofolioController extends Controller
{

    public function index()
    {
        $sousLogo= SousLogo::all();
        $images= Logo::all();
        $tasks = Task::all();
        return view('monSite',compact('tasks','images','sousLogo'));
    }



}

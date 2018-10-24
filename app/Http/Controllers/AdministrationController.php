<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;
use App\Logo;
use App\SousLogo;
use App\User;

class AdministrationController extends Controller
{

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
        $images= Logo::all();
        $sousLogo= SousLogo::all();
        $tasks = Task::all();
        return view('admin/adminHome',compact('tasks','images','sousLogo'));
    }

    public function indexAdminProject()
    {
        $tasks = Task::all();
        return view('admin/adminProject',compact('tasks'));
    }

    public function indexAdminSkill()
    {
        $images= Logo::all();
        $sousLogo= SousLogo::all();
        return view('admin/adminSkill',compact('images','sousLogo'));
    }

}

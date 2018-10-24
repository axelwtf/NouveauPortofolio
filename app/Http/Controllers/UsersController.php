<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ImageUser;
use App\User;

class UsersController extends Controller
{

    public function index()
    {
        $images = ImageUser::all();
        // $users = User::with('image')->get();
        return view('adminProfile/profile');
    }

    public function store(Request $request)
    {
        //
    }

    public function edit($id)
    {
        $users=User::find($id);
        // $this->authorize('test', $users);
        return view('edit', compact('users','roles'));
    }


    public function update(Request $request, $id)
    {
        $users=User::find($id);
        $users->name = $request->name;

        $users->save();
        return redirect('admin');
    }

}

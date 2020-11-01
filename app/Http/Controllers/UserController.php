<?php

namespace App\Http\Controllers;

use App\Http\Requests\ArticlesRequest;
use Illuminate\Http\Request;
use App\User;


class UserController extends Controller
{

    public function index()
    {
        $users = User::all();
        //$users = User::withTrashed()->get(); usuarios eliminados
   
        return view('users.index')->with(['users' => $users]);
    }
    
    public function store(Request $request)
    {
        $user = new User;
        $user->fill(
            $request->only(
                'name',
                'email',
                'job'
            )
        );
        $user->password=bcrypt($request->password);
        $user->save();
        return redirect()->to('users');
    }

    public function destroy(user $user)
    {
        $user->delete();

        return redirect('/users');
    }
    
    public function show($id)
    {
        //
    }

   
    public function edit($id)
    {
        //
    }

   
    public function update(user $user)
    {
        $user->name = request()->name;
        $user->email = request()->email;
        $user->password = bcrypt(request()->password);
        $user->job = request()->job;

        $user->save();

        return redirect('/users');
    }

}

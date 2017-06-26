<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests\UserRequest;
use App\Models\User;
use Hash;
use Auth;

class UserController extends Controller
{
    public function index()
    {
        $users = DB::table('users')->orderBy('id', 'DESC')->paginate(10);
        
        return view('admin.users.index', compact('users'));
    }

    public function create()
    {
        return view('admin.users.create');
    }

    public function store(UserRequest $request)
    {
        $user = new User();
        $user->name = $request->txtUser;
        $user->password = Hash::make($request->txtPass);
        $user->email = $request->txtEmail;
        $user->role = $request->rdoLevel;
        $user->remember_token = $request->_token;
        $user->save();

        return redirect()
                ->route('user.index')
                ->with([
                    'flash_level' => 'success',
                    'flash_message' => 'Success !! Complete Add New User'
                ]);
    }

    public function edit($id)
    {
        $data = User::find($id);
        if ((Auth::user()->id != 2) && ($id == 2 || ($data['role'] == 1 && (Auth::user()->id != $id)))) {

            return redirect()
                ->route('user.index')
                ->with([
                    'flash_level'=>'danger', 
                    'flash_message'=>'Sorry !! You Can\'t Access update User '
                ]);
        }

        return view('admin.users.edit', compact('data', 'id'));
    }

    public function update($id, Request $request)
    {
        $user = User::find($id);
        if ($request->input('txtPass')) {
            $this->validate($request, 
            [
                'txtRePass' => 'same:txtPass'
            ],

            [
                'txtPass.same' => 'Two Password Don\'t March'
            ]);

            $pass = $request->txtPass;
            $user->password = Hash::make($pass);
        }   
        if (Auth::user()->id == $id) {
            $user->name = $request->txtUser;
            $user->email = $request->txtEmail;
        } else {
            
            $user->role = $request->rdoLevel;
        }
            $user->save();

        return redirect()
            ->route('user.index')
            ->with([
                'flash_level' => 'success', 
                'flash_message' => 'Success !! Complete Update User'
            ]);
    }

    public function destroy($id)
    {
        $user_current_login = Auth::user()->id;
        $user = User::find($id);
        if ($id == 2 || $user_current_login != 2 && $user['role'] ==1) 
        {
            return redirect()->route('user.index')
                ->with(['flash_level' => 'danger', 'flash_message' => 'Errors !! You Can\'t Access Delete This User ']);
        } else {
            $user->delete($id);

            return redirect()->route('user.index')
                ->with(['flash_level' => 'success', 'flash_message' => 'Success !! Complete Delete User']);
        }
    }
}


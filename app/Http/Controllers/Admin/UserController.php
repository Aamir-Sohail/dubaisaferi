<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

// use App\Http\Controllers\Admin\UserController;

class UserController extends Controller
{
    public function index()
    {

        $users = User::all();
        // dd($users);
        return view('admin.user.index', compact('users'));

    }


    public function edit($user_id)
    {
        // $users = User::where('role_as','0')->get();
        $user = User::find($user_id);
return view('admin.user.user_edit', compact('user'));
    }

public function update(Request $request, $user_id)

{

$users = User::find($user_id);

$users->name = $request->name;
$users->email = $request->email;
$users->role_as = $request->role_as;

// $users->created_at = Auth::user()->id;

$users->update();
return redirect('admin/user');
}

public function destory($user_id)
{
$users = User::find($user_id);
$users->delete();
return redirect()->back();

}
}

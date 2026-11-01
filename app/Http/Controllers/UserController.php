<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return view('user.index', [
            'user' => User::latest()->get()
        ]);
    }

    public function add(){
        return view('user.insert');
    }

    public function insert(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'usertype' => 'required',
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
            'usertype' => $request->usertype,
        ]);

        return redirect()->route('user')->with('message', 'Data added successfully!');

    }

    public function delete($id)
{
    $user = User::findOrFail($id);
    $user->delete();

    return redirect()->route('user')->with('message', 'Data deleted successfully!');
}

}

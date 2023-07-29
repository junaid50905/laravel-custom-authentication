<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function create()
    {
        return view('register');
    }
    public function registerStore(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|unique:users,email',
            'password' => 'required'
        ]);
        User::create($request->all());
        return redirect()->route('login');
    }
    public function login()
    {
        return view('login');
    }
    public function loginStore(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
        $user = User::where('email', $request->email)->first();
        if($user){
            if(Hash::check($request->password, $user->password)){
                $request->session()->put('logged_in_user', $user->id);
                return redirect()->route('dashboard');
            }else{ return redirect()->back();}
        }else{
            return redirect()->back();
        }
    }
    public function dashboard()
    {
        $data = array();
        if (session()->has('logged_in_user')) {
            $data = User::where('id', Session()->get('logged_in_user'))->first();
        }
        return view('dashboard', compact('data'));
    }
    public function logout()
    {
        if(session()->has('logged_in_user')){
            session()->pull('logged_in_user');
            return redirect()->route('login');
        }
    }
}

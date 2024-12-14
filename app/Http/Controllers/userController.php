<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class userController extends Controller
{
    public function login(Request $request){
        $credentials = $request->only('username', 'password');
        $user = DB::table('admin')
            ->where('username', $credentials['username'])
            ->where('password', $credentials['password'])
            ->first();
        if ($user) {
            Auth::loginUsingId($user->IDAdmin);
            session(['user' => $user]);
            Auth::id($user->IDAdmin);
            return redirect('/addc');
        } else {
            return redirect('/login')->with('msg', 'Kesalahan username &/ Password!');
        }
    }
    public function showProfile(){
        $user = session('user');
        $userString = strval($user->idusr_kbt);

        if (!$user) {
            return redirect()->route('login');
        }else{
            return view('Page.profile', compact('user', 'userString'));
        }
    }
}

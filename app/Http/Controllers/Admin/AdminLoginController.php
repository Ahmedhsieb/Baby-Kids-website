<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use Illuminate\Database\Console\Seeds\SeedCommand;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use MongoDB\Driver\Session;

class AdminLoginController extends Controller
{
    public function login()
    {
        return view('Admin.login');
    }

    public function postLogin(LoginRequest $request)
    {
//        dd($request);
        $credentials = $request->only('email', 'password');
//        dd($credentials);
//        dd(Auth::attempt($credentials));
       if (Auth::attempt($credentials)){
           return redirect(route('admin.index'));
       }
       return redirect()->back();
    }

    public function logout(Request $request)
    {
        session()->flush();
        Auth::logout();

        return redirect(route('admin.login'));
    }

}

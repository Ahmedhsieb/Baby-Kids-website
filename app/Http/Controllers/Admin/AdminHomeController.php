<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminHomeController extends Controller
{
    public function index()
    {
        $users = User::get();
        return view('Admin.index', compact('users'));
    }

    public function delete($user_id)
    {
        User::find($user_id)->delete();
        return redirect()->back();


    }
}

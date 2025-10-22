<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;


class AdminController extends Controller
{
    public function index()
    {
        return view('dashboard.home');
    }

    public function usersIndex()
    {

        $users = User::all();
        return view('dashboard.users', compact('users'));
    }

    public function usersDelete(User $user)
    {

        $user->delete();
        return back();
    }
}

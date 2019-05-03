<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        return view('home');
    }

    public function profile()
    {
        //$user = Auth::user();

        $user = User::find(2);
        //$user->name = 'Steve Joe';
        //$user->save();
        //$user->delete();
        $users = User::all();

        dd($users->count());


        return view('profile', ['users' => $users]);
    }
}

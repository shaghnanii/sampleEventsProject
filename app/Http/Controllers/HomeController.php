<?php

namespace App\Http\Controllers;

use App\Events\Registration\NewUserRegisteredEvent;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

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
        $users = User::all();
        return view('home')->with('users', $users);
    }

    public function create(){
        return view('users.create');
    }

    public function store(Request $request){
        $validate = $request->validate([
            'user_name' => 'required|min:3',
            'user_email' => 'required|email|unique:users,email',
            'user_password' => 'required|min:6'
        ]);

        $data = [
            'name' => $request->user_name,
            'email' => $request->user_email,
            'password' => Hash::make($request->user_password),
        ];

        User::insert($data);

        event(new NewUserRegisteredEvent($data));

        return redirect('/home');
    }

}

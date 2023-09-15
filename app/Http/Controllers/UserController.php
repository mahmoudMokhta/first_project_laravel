<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;



class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
    }

    public function login()
    {
        return view('auth.login');
    }
    public function register()
    {
        return view('auth.register');
    }
    public function logout(){

        session()->flush();
        return redirect()->route('home');
    }
    public function errorLogin(){

      return view('auth.login')->with('errorNoLogin','please login first create post');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:5|max:12',
        ]);
        User::create($data);
        return redirect()->route('login')->with('success', "Done");
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    public function check(Request $request)
    {
        // get user data and check it with the request date
        $data = $request->validate([
            'email' =>'required|email',
            'password' => 'required|min:5|max:12',
        ]);
        $user = User::where('email', $data['email'])->first();
        if ($user) {
            if (password_verify($data['password'], $user->password)) {
                $request->session()->put('user', $user);

              return  redirect()->route('home');
            } else {
                return redirect()->route('login')->with('error', "Wrong password");
            }
        } else {
            return redirect()->route('login')->with('error', "Wrong email");
        }
        return $request  ;

        }



    /**
     * Display the specified resource.
     */
    public function profile()
    {
       return view('users.profile');
    }

    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

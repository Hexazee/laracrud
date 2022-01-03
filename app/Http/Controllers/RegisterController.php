<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    public function index() {
        return view('register.index', [
            'title' => 'Register'
        ]);
    }

    public function store(Request $request) {
        $validatedData = $request->validate([
            'name' => 'required|max:100',
            'username' => 'required|unique:users|max:20|min:6',
            'email' => 'required|unique:users',
            'password' => 'required|min:8',
        ]);

        // enkripsi password
        $validatedData['password'] = bcrypt($validatedData['password']);

        User::create($validatedData);

        return redirect('login/')->with('success', 'Yeayy!!' . $validatedData['name'] . ', Register Successfully!' );

    }

}











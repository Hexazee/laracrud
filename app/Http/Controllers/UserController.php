<?php

namespace App\Http\Controllers;

use App\Models\User;

class UserController extends Controller
{
    // controller untuk halaman post yg ditulis oleh user
    public function posts(User $user) {
        return view('user.posts', [
            'title' => $user->username,
            // lazy eiger loader (untuk menghindari N+1 Problem)
            'posts' => $user->posts->load('category', 'author'),
            'author' => $user->name,
            'job' => $user->job
        ]);
    }
}

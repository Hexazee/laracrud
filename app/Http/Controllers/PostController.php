<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;

class PostController extends Controller
{
    // controller untuk halaman index
    public function index() {
        return view('home', [
            'title' => 'Home',
            'categories' => Category::all(),
            // Eiger loader (untuk menghindari N+1 Problem)
            'posts' => Post::latest()->paginate(6),
        ]);
    }

    // controller untuk halaman kategori
    public function category(Category $category) {
        return view('posts.category', [
            'title' => $category->name,
            // Lazy Eiger Loader (untuk menghindari N+1 Problem)
            'posts' => $category->posts
        ]);
    }

    // controller untuk halaman detail
    public function detail(Post $post) {
        return view('posts.detail', [
            'title' => $post->title,
            'post' => $post
        ]);
    }
}

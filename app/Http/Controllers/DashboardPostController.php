<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class DashboardPostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.posts.index', [
            'title' => 'My Posts',
            // query berdasarkan author
            'posts' => Post::latest()->where('user_id', auth()->user()->id)->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.posts.create', [
            'title' => 'Create Post',
            'categories' => Category::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Post $post)
    {
        $dataValidated = $request->validate([
            'title' => 'required|max:100',
            'category_id' => 'required',
            'body' => 'required',
            'image' => 'image|file|max:1024'
        ]);

        $dataValidated['image'] = $request->file('image')->store('post-image');

        $slug = Str::slug(strip_tags($request->title));

        // biar gk duplikasi
        $dataValidated['slug'] = Str::slug($slug . '-' . rand(1,1000));

        $dataValidated['user_id'] = auth()->user()->id;
        $dataValidated['published_at'] = now();

        Post::create($dataValidated);

        return redirect('/dashboard/posts')->with('success', 'Yeay your post has added!');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        return view('dashboard.posts.show', [
            'title' => $post->title,
            'post' => $post,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        return view('dashboard.posts.edit', [
            'title' => 'Edit Post',
            'post' => $post,
            'categories' => Category::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        $dataRules = $request->validate([
            'title' => 'required|max:100',
            'category_id' => 'required',
            'body' => 'required',
        ]);

        $slug = Str::slug($request->title);

        if($slug != $post->slug) {
            $dataRules['slug'] = 'required|unique:posts';
        }
        
        $dataRules['slug'] = $slug;

        $dataRules['user_id'] = auth()->user()->id;
        $dataRules['published_at'] = now();

        Post::where('id', $post->id)
                ->update($dataRules);

        return redirect('/dashboard/posts')->with('success', $post->title . 'Post has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        Post::destroy($post->id);
        return redirect('/dashboard/posts')->with('success', 'Post has been deleted!');
    }
}

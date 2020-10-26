<?php

namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{

    public function showFirstOnRoot() {
        $posts = Post::first();
        return view('postsPage') -> with('posts', $posts);
    }

    public function index() {
        $posts = Post::all();
        return view('posts') -> with('posts', $posts);
    }

    public function show($id) {

        $post = Post::findOrFail($id);
        return $post;
    }

    public function create() {
        return view(null);
    }

    public function save(Request $request) {
        $post = new Post($request->all());
        $post->save();
        return redirect()->back();
    }

    public function edit($id) {
        $post = Post::findOrFail($id);
        return view('edit') -> with('post', $post);
    }

    public function update(Request $request, $id) {
        $post = Post::findOrFail($id);

        $post -> title = $request -> title;
        $post -> text = $request -> text;
        $post -> post_likes = $request -> post_likes;

        $post->save();
        return redirect('/posts');
    }

    public function  delete($id) {
        $post = Post::findOrFail($id);
        $post -> delete();
        return redirect('/posts');
    }
}

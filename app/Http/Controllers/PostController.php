<?php
// app/Http/Controllers/PostController.php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
  public function index()
  {
    $posts = Post::all();
    return view('posts.index', compact('posts'));
  }

  public function create()
  {

    $auth = Auth::user();

    $data = [
        "auth" => $auth
    ];

    return view('create', $data);
  }

  public function store(Request $request)
  {
    $request->validate([
      'title' => 'required|string|max:255',
      'content' => 'required|string',
    ]);

    Post::create([
      'title' => $request->input('title'),
      'content' => $request->input('content'),
    ]);

    return redirect()->route('posts.index')->with('success', 'Post created successfully.');
  }

  public function show($id)
  {
    $post = Post::findOrFail($id);
    return view('posts.show', compact('post'));
  }

  public function edit($id)
  {
    $post = Post::findOrFail($id);
    return view('posts.edit', compact('post'));
  }

  public function update(Request $request, $id)
  {
    $request->validate([
      'title' => 'required|string|max:255',
      'content' => 'required|string',
    ]);

    $post = Post::findOrFail($id);
    $post->update([
      'title' => $request->input('title'),
      'content' => $request->input('content'),
    ]);

    return redirect()->route('posts.index')->with('success', 'Post updated successfully.');
  }

  public function destroy($id)
  {
    $post = Post::findOrFail($id);
    $post->delete();

    return redirect()->route('posts.index')->with('success', 'Post deleted successfully.');
  }
}

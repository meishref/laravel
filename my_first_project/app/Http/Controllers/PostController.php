<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    private $posts = [
        1 => ["id"=>1,"title"=>"Post 1","body"=>"Body 1"],
        2 => ["id"=>2,"title"=>"Post 2","body"=>"Body 2"],
    ];

    public function index()
    {
        return view('posts.index', ['posts' => $this->posts]);
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        return redirect('/posts');
    }

    public function show($id)
    {
        $post = $this->posts[$id] ?? null;

        if (!$post) {
            return "Not Found ";
        }

        return view('posts.show', compact('post'));
    }

    public function edit($id)
    {
        $post = $this->posts[$id];
        return view('posts.edit', compact('post'));
    }

    public function update(Request $request, $id)
    {
        return redirect('/posts');
    }

    public function destroy($id)
    {
        return redirect('/posts');
    }
}
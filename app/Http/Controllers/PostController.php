<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUpdatePost;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller {
    public function index()
    {
        $posts = Post::latest()->paginate(15);


        return view('admin.posts.index',['posts' => $posts]);
    }

    public function create(){
        return view('admin.posts.create');
    }


    public function store(StoreUpdatePost $request){
        $post = Post::create($request->all());

        return redirect()->route('posts.index')->with('msg', 'Post criado com sucesso');
    }

    public function show($id){
      //  $post = Post::where('id', $id)->first();
        $post = Post::find($id);
        if(!$post){
            return redirect()->route('posts.index');
        }

        return view('admin.posts.show', compact('post'));
    }

    public function destroy($id){
        $post = Post::find($id);
        if(!$post){
            return redirect()->route('posts.index');
        }
        $post->delete();
        return redirect()->route('posts.index')->with('msg', 'Post deletado com sucesso');
    }

    public function edit($id){
        $post = Post::find($id);
        if(!$post){
            return redirect()->back();
        }

        return view('admin.posts.edit', compact('post'));
    }


    public function update(StoreUpdatePost $request, $id){
        $post = Post::find($id);
        if(!$post){
            return redirect()->back();
        }
        $post->update($request->all());

        return redirect()->route('posts.index')->with('msg', 'Post atualizado com sucesso');
    }
}

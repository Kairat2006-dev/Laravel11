<?php

namespace App\Http\Controllers;

use App\Models\Post;
use http\Env\Response;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        return Post::all();
    }
    public function show(Post $post)
    {
        return Post::find($post);
    }
    public function store()
    {
        $data = [
            'title'=>'asd',
            'content'=>'asd',
            'slug'=>'asdasd'
        ];
        $post = Post::create($data);
        return $post;
    }
    public function update(Post $post)
    {
        $data = [
            'title' => 'DDDDDDD'
        ];
        $post->update($data);
        return $post;
    }
    public function destroy(Post $post)
    {
        $post->delete();
        return 204;
    }
}

<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Post\StoreRequest;
use App\Http\Requests\Post\UpdateRequest;
use App\Http\Resources\Post\PostResource;
use App\Models\Post;
use http\Env\Response;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        return PostResource::collection(Post::all())->resolve();
    }

    public function store(StoreRequest $request)
    {

       $data = $request->validated();
       $post = Post::create($data);
       return PostResource::make($post)->resolve();
    }

    public function show(Post $post)
    {
        return PostResource::make($post);
    }

    public function update(UpdateRequest $request, Post $post)
    {

        $data = $request->validated();
        $post->update($data);
        return PostResource::make($post)->resolve();
    }

    public function destroy(Post $post)
    {
        $post->delete();
        return 'delete';
    }
}

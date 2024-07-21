<?php

namespace App\Http\Controllers\Comment;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use App\Models\User;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function index()
    {
        return Comment::all();
    }
    public function show(Comment $comment)
    {
        return Comment::find($comment);
    }
    public function store()
    {
        $data = [
            'user_id'=>User::find(2)->id,
            'content'=>'asdasdasdas',
            'like'=>123,
            'status'=>1,
        ];
       $comment = Comment::create($data);
        return $comment;
    }
    public function update(Comment $comment){
        $data = ['content'=>'asdasdasd'];
        $comment->update($data);
        return $comment;
    }
    public function destroy(Comment $comment)
    {
        $comment->delete();
        dd(111);
    }
}

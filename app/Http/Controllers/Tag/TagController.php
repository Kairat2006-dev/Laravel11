<?php

namespace App\Http\Controllers\Tag;

use App\Http\Controllers\Controller;
use App\Models\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
    public function index()
    {
        return Tag::all();
    }

    public function show(Tag $tag)
    {
        return Tag::find($tag);
    }

    public function store()
    {
        $data = [
            'title'=>'asdWW',
            'description'=> 'asdasdasdasd'
        ];
        $tag = Tag::create($data);
        return $tag;
    }

    public function update(Tag $tag)
    {
        $data = [
            'title' => 'qweqwe'
        ];
        $tag->update($data);
        return $tag;
    }

    public function destroy(Tag $tag)
    {
        $tag->delete();
        return dd(111);
    }
}

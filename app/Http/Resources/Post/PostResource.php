<?php

namespace App\Http\Resources\Post;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PostResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id'=>$this->id,
            'title'=>$this->title,
            'content'=>$this->content,
            'slug'=>$this->slug
        ];
    }
}
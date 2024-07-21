<?php

namespace App\Observers;

use App\Models\Log;
use App\Models\Post;


class PostObserver
{
//    /**
//     * Handle the Post "created" event.
//     */
//    public function created(Post $post): void
//    {
//        $this->log($post,'created',null,$post->toArray());
//    }
//
//    /**
//     * Handle the Post "updated" event.
//     */
//    public function updated(Post $post): void
//    {
//        $this->log($post,'updated',$post->getDirty(), $post->toArray());
//    }
//
//    /**
//     * Handle the Post "deleted" event.
//     */
//    public function deleted(Post $post): void
//    {
//        $this->log($post,'deleted',$post->toArray(), null);
//    }
//
//    /**
//     * Handle the Post "restored" event.
//     */
//    public function retrieved(Post $post): void
//    {
//        $this->log($post, 'retrieved', null, $post->toArray());
//    }
//    private function log($post,string $event,?array $oldData, ?array $newData)
//    {
//        Log::create([
//            'event'=>$event,
//            'old_box'=>$oldData ? serialize($oldData) : null,
//            'new_box'=>$newData ? serialize($newData) : null,
//        ]);
//    }
}

<?php

namespace App\Console\Commands;

use App\Models\Log;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Console\Command;

class DevCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'dev';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $post = Post::find(1);
//        $post->delete();
//        $post->delete();
         $post->create([
            'title' => 'asd',
            'slug' => 'aasdasdphp sd',
            'profile_id' => 1,
            'content' => 'asd',
            'category_id'=>1
        ]);

        dd(111);
    }
}

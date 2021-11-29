<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;
use Carbon\Carbon;

class ShowController extends Controller
{
    public function __invoke(Post $post)
    {
        Carbon::setLocale('ua_UA');
        $date = Carbon::parse($post->created_at);
        return view('post.show', compact('post'));
    }
}

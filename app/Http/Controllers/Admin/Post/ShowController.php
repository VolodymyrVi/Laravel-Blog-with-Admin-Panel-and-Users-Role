<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Post\StoreRequest;
use App\Models\Post;

class ShowController extends Controller
{
    public function __invoke(Post $post)
    {

        return view('admin.post.show', compact('post'));
    }
}
























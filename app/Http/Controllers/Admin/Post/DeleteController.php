<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;
use App\Models\Post;

class DeleteController extends Controller
{
    public function __invoke(Post $post)
    {
        $post->delete($post);
        return redirect()->route('admin.post.index');
    }
}

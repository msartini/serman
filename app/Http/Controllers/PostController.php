<?php

namespace Serman\Http\Controllers;

use Serman\Post;
use Carbon\Carbon;
use Illuminate\Support\Collection;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();

        return $this->transformCollection($posts);
    }

    public function transformCollection($posts)
    {
        return array_map([$this, 'transform'], $posts->toArray());
    }

    public function transform($post)
    {
        $dataTransform = [
            'title' => $post['title'],
            'description' => $post['description'],
            'create_at' => Carbon::parse($post['create_at'])->format('d/m/Y H:m'),
        ];

        return new Collection($dataTransform);
    }
}

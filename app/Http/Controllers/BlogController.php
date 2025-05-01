<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    //
    // BlogController.php
    public function index()
    {
        $posts = [
            [
                'id' => 1,
                'title' => 'First Blog Post',
                'image' => 'https://via.placeholder.com/600x300',
                'description' => 'This is a short description of the blog post.',
                'content' => 'This is the full content of the first blog post.',
            ],
            [
                'id' => 2,
                'title' => 'Second Blog Post',
                'image' => 'https://via.placeholder.com/600x300',
                'description' => 'Another interesting blog post summary.',
                'content' => 'Here’s more detailed info about the second post.',
            ],
        ];
    
        return view('blog.index', compact('posts'));
    }

    public function show($id)
{
    $posts = [
        [
            'id' => 1,
            'title' => 'First Blog Post',
            'image' => 'https://via.placeholder.com/600x300',
            'description' => 'This is a short description of the blog post.',
            'content' => 'This is the full content of the first blog post.',
        ],
        [
            'id' => 2,
            'title' => 'Second Blog Post',
            'image' => 'https://via.placeholder.com/600x300',
            'description' => 'Another interesting blog post summary.',
            'content' => 'Here’s more detailed info about the second post.',
        ],
    ];

    $post = collect($posts)->firstWhere('id', $id);

    if (!$post) {
        abort(404);
    }

    return view('blog.show', compact('post'));
}

}

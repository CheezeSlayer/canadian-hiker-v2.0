<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\DB;
use App\Post;

class PostController extends Controller
{
    //
    public function store($blog) {
        $data = request()->validate([
            'data.attributes.body' => '',
            'data.attributes.blog' => '',
        ]);

        $post = request()->user()->post()->create($data['data']['attributes']);

        return [
            'data' => [
                'type' => 'post',
                'id' => $post->id,
                'attrinutes' => [
                    'posted_by' => [
                        'name' => request()->user()->name,
                        'user_id' => $post->user_id,
                    ],
                    'posted_at' => [
                        'name' => $blog,
                        'date' => $post->created_at->diffForHumans()
                    ],
                    'body' => $post->body,
                ]
            ],
            'links' => [
                'blog' => url('/blog/'.$blog)
            ]
        ];
    }

    public function destroy(Post $post) {
        if(request()->user()->isNot($post->user)) {
            return response( [], 403);
        }

        $post->delete();

        return response([], Response::HTTP_NO_CONTENT);
    }

    public function index($blog) {
        $data = request()->validate([$blog]);

        $posts = DB::table('posts')->where('blog', $blog)->get();
        return [
            'data' => $posts
        ];
    }
}

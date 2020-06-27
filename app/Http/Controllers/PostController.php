<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use App\Post;

class PostController extends Controller
{
    //
    public function store($blog) {
        $data = request()->validate([
            'data.attributes.body' => '',
            'data.attributes.blog' => '',
        ]);
        if( $data['data']['attributes']['body'] && $data['data']['attributes']['blog']) {
            $post = request()->user()->post()->create($data['data']['attributes']);
            return response([
                'data' => [
                    'type' => 'post',
                    'id' => $post->id,
                    'attributes' => [
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
            ], Response::HTTP_OK);
        }

        return response([ 'Error' =>'Invalid Input'], Response::HTTP_BAD_REQUEST);
    }

    public function destroy(Post $post) {
        if(request()->user()->isNot($post->user)) {
            return response( ['Error' => 'Permission Denied'], Response::HTTP_FORBIDDEN);
        }
        $post->delete();
        return response(['success' => true], Response::HTTP_OK);
    }

    public function index($blog) {
        $data = request()->validate([$blog]);

        $posts = DB::table('posts')->where('blog', $blog)->get();

        foreach($posts as $post) {
            $post->created_at = Carbon::parse($post->created_at)->diffForHumans();
            $post->updated_at = Carbon::parse($post->updated_at)->diffForHumans();
        }
        return response([
            'data' => $posts
        ], Response::HTTP_OK);
    }
}

<?php

namespace Tests\Feature;

use App\User;
use App\Post;

use Symfony\Component\HttpFoundation\Response;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Str;
use Tests\TestCase;

class PostTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function an_authenticated_user_can_post_a_comment() {
        $this->withoutExceptionHandling();
        $user = factory(User::class)->create();

        $response = $this->post('/api/posts/deeks_lake_2018', array_merge($this->data() , ['api_token' => $user->api_token]));

        $post = Post::first();

        $this->assertCount(1, Post::all());
        $this->assertEquals($user->id, $post->user_id);
        $this->assertEquals('Some random text.', $post->body);

        $response->assertStatus(200)
                    ->assertJson([
                        'data' => [
                            'type' => 'post',
                            'id' => $post->id,
                            'attrinutes' => [
                                'posted_by' => [
                                    'name' => $user->name,
                                    'user_id' => $post->user_id,
                                ],
                                'posted_at' => [
                                    'name' => 'deeks_lake_2018',
                                    'date' => $post->created_at->diffForHumans()
                                ],
                                'body' => 'Some random text.',
                            ]
                        ],
                        'links' => [
                            'blog' => url('/blog/deeks_lake_2018')
                        ]
                    ]);
    }

    /** @test */ 
    public function an_authenticated_user_can_delete_owned_post() {
        $this->withoutExceptionHandling();
        $user = factory(\App\User::class)->create();

        $post = factory(\App\Post::class)->create(['user_id' => $user->id]);
        $this->assertCount(1, Post::all());

        $response = $this->delete('/api/posts/'.$post->id, ['api_token' => $user->api_token]);
        $this->assertCount(0, Post::all());

        $response->assertStatus(Response::HTTP_NO_CONTENT);
    }

    /** @test */
    public function an_authenticated_user_cannot_delete_unowned_post() {
        $this->withoutExceptionHandling();
        $user = factory(\App\User::class)->create();
        $anotherUser = factory(\App\User::class)->create();

        $post = factory(\App\Post::class)->create(['user_id' => $anotherUser->id]);
        $this->assertCount(1, Post::all());

        $response = $this->delete('/api/posts/'.$post->id, ['api_token' => $user->api_token]);
        $this->assertCount(1, Post::all());

        $response->assertStatus(403);
    }

    /** @test */
    public function any_user_can_get_a_blogs_posts() {
        $this->withoutExceptionHandling();
        $user = factory(\App\User::class)->create();

        $post = factory(\App\Post::class, 5)->create(['user_id' => $user->id]);
        $this->assertCount(5, Post::all());

        $response = $this->get('/api/posts/deeks_lake_2018');

        $response->assertStatus(200);
        $response->assertJson([
            'data' => [
                [
                    "id" => 1,
                    "user_id" => 1,
                    "blog" => "deeks_lake_2018",
                ],
                [
                    "id" => 2,
                    "user_id" => 1,
                    "blog" => "deeks_lake_2018",
                ],
                [
                    "id" => 3,
                    "user_id" => 1,
                    "blog" => "deeks_lake_2018",
                ],
                [
                    "id" => 4,
                    "user_id" => 1,
                    "blog" => "deeks_lake_2018",
                ],
                [
                    "id" => 5,
                    "user_id" => 1,
                    "blog" => "deeks_lake_2018",
                ]
            ]
        ]);
    }

    private function data() {
        return [
            'data' => [
                'type' => 'post',
                'attributes' => [
                    'body' => 'Some random text.',
                    'blog' => 'deeks_lake_2018'
                ]
            ]
        ];
    }
}

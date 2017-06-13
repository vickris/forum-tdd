<?php

namespace Tests\Feature;

use App\User;
use App\Reply;
use App\Thread;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ThreadsTest extends TestCase
{
    use DatabaseMigrations;


    public function setUp()
    {
        parent::setUp();

        $this->thread = factory(Thread::class)->create();
    }
    /** @test */
    public function a_user_can_see_all_threads()
    {
        $response = $this->get('/threads');

        $response->assertStatus(200)
                ->assertSee($this->thread->title);
    }

    /** @test */
    public function a_user_can_see_one_thread()
    {
        $response = $this->get('/threads/'. $this->thread->id);

        $response->assertStatus(200)
                ->assertSee($this->thread->title);
    }

    /** @test */
    public function a_user_can_see_replies_to_a_thread()
    {
        $reply = factory(Reply::class)->create(['thread_id' => $this->thread->id]);

        $this->get('/threads/'. $this->thread->id)
            ->assertStatus(200)
            ->assertSee($reply->body);
    }
}

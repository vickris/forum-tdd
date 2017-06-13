<?php

namespace Tests\Unit;


use App\Reply;
use App\Thread;
use App\User;
use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ReplyTest extends TestCase
{
    use DatabaseMigrations;
    /** @test */
    public function a_relationship_exists_between_a_reply_and_a_user()
    {
        $reply = factory(Reply::class)->create();

        $this->assertInstanceOf('App\User', $reply->owner);
    }
}

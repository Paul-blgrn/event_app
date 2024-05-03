<?php

use App\Models\Comment;

use function Pest\Laravel\get;
use function Pest\Laravel\withoutExceptionHandling;

test('can display 1 specific comment', function () {

    withoutExceptionHandling();

    $comment = Comment::factory()->create();

    get("event/comment/{$comment->id}")
        ->assertOk()
        ->assertSee($comment->user->name)
        ->assertSee($comment->text);
});

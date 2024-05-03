<?php

test('example', function () {
    $response = $this->get('/');

    $response->assertStatus(200);
});

it('show home', function () {
    $this->get('/')
    ->assertStatus(200);
});

it('show login page', function () {
    $this->get('/login')
    ->assertStatus(200);
});

it('show cities', function () {
    $this->get('/cities')
    ->assertStatus(200);
});

it('show events', function () {
    $this->get('/events')
    ->assertStatus(200);
});

it('show comments', function () {
    $this->get('/events/comments')
    ->assertStatus(200);
});

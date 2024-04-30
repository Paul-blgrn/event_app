<?php

test('example', function () {
    $response = $this->get('/');

    $response->assertStatus(200);
});

it('create random cities', function () {

});

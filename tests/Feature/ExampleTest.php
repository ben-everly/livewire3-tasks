<?php

it('visits the homepage', function () {
    $response = test()->get('/');
    $response->assertStatus(200);
});

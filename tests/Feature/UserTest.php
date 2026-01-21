<?php

use Illuminate\Foundation\Testing\RefreshDatabase;
 
pest()->use(RefreshDatabase::class);

test('création user', function () {
    $response = $this->post('/subscribe', ['name' => 'Astro', 'email' => 'admin@astro.fr', 'password' => 'Azerty1234!']);

    $this->assertDatabaseCount('users', 1);
});

test("login user",function () {
    $response = $this->post('/subscribe', ['name' => 'Astro', 'email' => 'admin@astro.fr', 'password' => 'Azerty1234!']);
    $response = $this->post('/login', ['email' => 'admin@astro.fr', 'password' => 'Azerty1234!']);
    $this->assertAuthenticated($guard = 'web');
});
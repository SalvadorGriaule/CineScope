<?php

use App\Models\Admin;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
 
pest()->use(RefreshDatabase::class);


test("un utilisateur non connecté tente d'aller à /admin/films", function () {
    $response = $this->get('/admin/films');

    $response->assertStatus(302);
});

test("user tente d'aller à /admin/films", function () {

    $user = User::factory()->create();
    $response = $this->actingAs($user)->get("/admin/films");

    $response->assertStatus(403);
});

test('admin tente de se connecter', function () {

    $user = Admin::factory()->create();
    $response = $this->actingAs($user)->get("/admin/films");

    $response->assertStatus(200);
});

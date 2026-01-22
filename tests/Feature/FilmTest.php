<?php

use App\Models\Admin;
use Illuminate\Foundation\Testing\RefreshDatabase;

use function Pest\Laravel\actingAs;

pest()->use(RefreshDatabase::class);


test('accés film', function () {
    $user = Admin::factory()->create();
    $response = $this->actingAs($user)->post('/admin/films', ["title" => "Oslo, 31 aout", "releaseYear" => "2017"]);

    $response = $this->get("/films");

    $response->assertStatus(200);
});

test('accéder un film précise', function () {
    $user = Admin::factory()->create();
    $response = $this->actingAs($user)->post('/admin/films', ["title" => "Oslo, 31 aout", "releaseYear" => "2017"]);
    $response = $this->get("/films/1");

    $response->assertStatus(200);
});

test('création film', function () {
    $user = Admin::factory()->create();
    $response = $this->actingAs($user)->post('/admin/films', ["title" => "Oslo, 31 aout", "releaseYear" => "2017"]);
    $this->assertDatabaseCount('films', 1);
});

test("formulaire de création de film", function () {
    $user = Admin::factory()->create();
    $page = actingAs($user)->visit("/admin/films");
    
    $page->fill("title", "Made in Hong Kong")->fill("releaseYear", "1999")->click("Crée");

    $this->assertDatabaseCount('films', 1);
});

test('redirection apres création film', function () {
    $user = Admin::factory()->create();
    $response = $this->actingAs($user)->post('/admin/films', ["title" => "Oslo, 31 aout", "releaseYear" => "2017"]);
    $response->assertStatus(302);
});

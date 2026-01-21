<?php


use App\Models\User;
use App\Models\Admin;
use Illuminate\Foundation\Testing\RefreshDatabase;
 
pest()->use(RefreshDatabase::class);

test('création film', function () {
    $user = Admin::factory()->create();
    $response = $this->actingAs($user)->post('/admin/films',["title" => "Oslo, 31 aout","releaseYear" => "2017"]);
    $this->assertDatabaseCount('films', 1);
});

<?php

use App\Models\Admin;
use Illuminate\Foundation\Testing\RefreshDatabase;
 
pest()->use(RefreshDatabase::class);

test('création platforms', function () {
    $user = Admin::factory()->create();
    $response = $this->actingAs($user)->post('/admin/platforms',["name" => "Filmo"]);
    $this->assertDatabaseCount('platformes', 1);
});

<?php

namespace Tests\Feature;

use App\Models\Admin;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class CategoryTest extends TestCase
{
    use DatabaseMigrations;

    /** @test */
    public function a_admin_can_browse_all_categories()
    {
        $user = factory(Admin::class)->create();

        $response = $this->actingAs($user)
            ->get('/categories');

        $response->assertStatus(200);
    }
}

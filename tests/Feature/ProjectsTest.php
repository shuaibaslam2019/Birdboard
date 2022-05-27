<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;

Class ProjectsTest extends TestCase

{
    use WithFaker, RefreshDatabase;

    /** @test */

    public function a_user_can_create_project()
    {
        $this->withoutExceptionHandling();
        $attributes = [

            'title' => $this->faker->sentence,
            'description' => $this->faker->paragraph

        ];

        $this->post('/projects', $attributes)->assertRedirect('/projects');

        // $this->assertDatabaseHas('projects', $attributes);

        // $this->get('/projects')->assertSee($attributes['title']);
    }
}

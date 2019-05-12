<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ExampleSQLiteTest extends TestCase
{
    use RefreshDatabase;

    public function testSQLite()
    {
        $response = $this->get('/sqlite');

        $response->assertStatus(200);
    }
}

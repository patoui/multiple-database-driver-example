<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\MySQLDatabaseTestCase;

class ExampleMySQLTest extends MySQLDatabaseTestCase
{
    use RefreshDatabase;

    public function testMySQL()
    {
        $response = $this->get('/mysql');

        $response->assertStatus(200);
    }
}

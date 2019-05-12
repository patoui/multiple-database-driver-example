<?php

namespace Tests;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class MySQLDatabaseTestCase extends TestCase
{
    public function setUp() : void
    {
        $_ENV['DB_CONNECTION'] = 'mysql_testing';
        putenv('DB_CONNECTION=mysql_testing');

        parent::setUp();
    }
}

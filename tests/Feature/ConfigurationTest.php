<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ConfigurationTest extends TestCase
{
    public function testConfigurationFile()
    {
        $firstName = config("contoh.author.first");
        $lastName = config("contoh.author.last");
        $email = config("contoh.email");
        $web = config("contoh.web");

        self::assertEquals("dika", $firstName);
        self::assertEquals("saputro", $lastName);
        self::assertEquals("blankeistein@gmail.com", $email);
        self::assertEquals("https://blankeistein.my.id/", $web);
    }
}

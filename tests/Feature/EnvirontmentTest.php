<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Env;
use Tests\TestCase;

class EnvirontmentTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_get_env()
    {
        $youtube = env("YOUTUBE");

        self::assertEquals("Programmer Zaman Now", $youtube);
    }

    public function test_default_env()
    {
        $default_env = Env::get("Name", "dika");

        self::assertEquals("dika", $default_env);
    }
}

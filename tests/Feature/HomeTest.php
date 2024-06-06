<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class HomeTest extends TestCase
{
    // Test if HTTP STAUS CODE 200 is returned
    public function testStatusCode() {
        $res = $this->get('/home');
        $res->assertStatus(200);
    }

    // Test if body contains Hello!
    public function testBody() {
        $res = $this->get('/home');
        $res -> assertSeeText("Hello!");
    }
}

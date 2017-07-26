<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class unittest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->assertTrue(true);
    }

    public function testAPI() {
        $response = $this->get('/api/studio');
        $response->assertStatus(200);
        $bioskop = $this->get('/api/bioskop');
        $bioskop->assertStatus(200);
        $movies = $this->get('/api/movies');
        $movies->assertStatus(200);
    }
}

<?php

namespace Tests\Unit;

use App\Cars;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CarMakeTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testCarMake()
    {
        $car = Cars::inRandomOrder()->first();
        $this->assertContains($car->Make, ['ford', 'toyota', 'honda']);

    }
}

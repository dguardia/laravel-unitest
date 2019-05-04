<?php

namespace Tests\Unit;

use App\Cars;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class DeleteCarTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testDeleteCar()
    {
        $car = Cars::find(12);
        $this->assertTrue($car->delete());
        //$this->assertTrue(true);

    }
}

<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;

class CountUserTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testCountUser(){
        $users = User::all();
        $usersCount = Count($users);
        //echo $usersCount;
        $this->assertEquals(50,$usersCount);
    }
}

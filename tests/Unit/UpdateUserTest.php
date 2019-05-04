<?php

namespace Tests\Unit;

use App\User;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UpdateUserTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testUpdateUser()
    {
        $user = User::find(5);
        $user->name = 'Steve Smith';
//        $user->save();
//        $this->assertDatabaseHas('users', ["name" => "Steve Smith"]);
        $this->assertTrue($user->save());
    }
}

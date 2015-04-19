<?php

use App\User;

class UserModelTest extends TestCase
{
    /** @test */
    public function it_can_get_user_roles()
    {
        User::shouldReceive('get');
    }
}

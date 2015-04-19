<?php

use Laracasts\Integrated\Extensions\Laravel as IntegrationTest;

class HomepageTest extends IntegrationTest
{
    /** @test */
    function it_shows_the_homepage()
    {
        $this->visit('/');
    }
}

<?php

namespace RigorTalks\tests;

use PHPUnit\Framework\TestCase;

use RigorTalks\Testing\Builder\{User, UserBuilder};

class BuilderTest extends TestCase
{

    function test_user_is_able_to_edit_video_with_enough_access_level()
    {
        $user = (new UserBuilder())->withAccessLevel(3)->build();

        $this->assertTrue($user->canEditVideos());
    }

    function test_user_is_not_able_to_edit_video_without_enough_access_level()
    {
        $user = (new UserBuilder())->withAccessLevel(1)->build();

        $this->assertFalse($user->canEditVideos());
    }
}
<?php

namespace RigorTalks\tests;

use PHPUnit\Framework\TestCase;
use RigorTalks\Testing\ObjectMother\UserMother;

class ObjectMotherTest extends TestCase
{
    public function test_user_is_able_to_edit_video_with_enough_access_level()
    {
        $user = UserMother::withAccessLevel(3);

        $this->assertTrue($user->canEditVideos());
    }

    public function test_user_is_not_able_to_edit_videos_without_enough_access_level()
    {
        $user = UserMother::withAccessLevel(1);

        $this->assertFalse($user->canEditVideos());
    }
}
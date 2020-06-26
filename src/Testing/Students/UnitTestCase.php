<?php

namespace RigorTalks\Testing\Students;

use Mockery;
use Mockery\Adapter\Phpunit\MockeryTestCase;
use Mockery\MockInterface;

class UnitTestCase extends  MockeryTestCase
{
    protected function mock($className): MockInterface
    {
        return Mockery::mock($className);
    }

    protected function namedMock($name, $className): MockInterface
    {
        return Mockery::namedMock($name, $className);
    }
}
<?php

namespace RigorTalks\tests;;

use PHPUnit\Framework\TestCase;
use RigorTalks\ExampleController\Models\Person;
use RigorTalks\ExampleController\PersonController;
use RigorTalks\ExampleController\Repositories\PersonRepository;

class ExampleControllerTest extends TestCase
{
    public function test_should_find_last_name_of_a_person()
    {
        $personRepositoryMock = $this->getMockBuilder(PersonRepository::class)
                                 ->setMethods(['findByLastName'])
                                 ->getMock();

        $personRepositoryMock->expects($this->once())
            ->method('findByLastName')
            ->with("Pan")
            ->willReturn(new Person("Peter", "Pan"));

        $controller = new PersonController($personRepositoryMock);


        $controller->show("Pan");

    }

    public function test_should_return_full_name_of_a_person()
    {
        $personRepositoryStub = $this->createMock(PersonRepository::class);

        // Configure the stub.
        $personRepositoryStub->method('findByLastName')
            ->willReturn(new Person("Peter", "Pan"));

        $controller = new PersonController($personRepositoryStub);

        $greeting = $controller->show("Pan");

        $this->assertSame($greeting, "Hello Peter Pan!");
    }
}
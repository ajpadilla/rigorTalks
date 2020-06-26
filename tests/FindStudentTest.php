<?php

namespace RigorTalks\tests;

use RigorTalks\Testing\Students\StudentFinder;
use RigorTalks\Testing\Students\StudentModuleUnitTestCase;
use RigorTalks\Testing\Students\StudentMother;
use RigorTalks\Testing\Students\StudentNotExist;


class FindStudentTest extends StudentModuleUnitTestCase
{
    private $finder;

    public function setUp()
    {
        parent::setUp();
        /** @var StudentFinder finder */
        $this->finder = new StudentFinder($this->repository());
    }

    /** @test */
    public function it_should_find_an_existing_student()
    {
        $student = StudentMother::random();
        $this->shouldSearchStudent($student->getId(), $student);
        $this->assertSame($student, $this->finder->find($student->getId()));
    }

    /** @test */
    public function it_should_throw_an_exception_finding_a_non_existing_student()
    {
        $this->expectException(StudentNotExist::class);

        $student = StudentMother::random();

        $this->shouldSearchStudent($student->getId(), null);

        $this->finder->find($student->getId());
    }
}
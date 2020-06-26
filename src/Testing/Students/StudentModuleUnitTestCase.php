<?php

namespace RigorTalks\Testing\Students;


use Mockery\MockInterface;
use phpDocumentor\Reflection\DocBlock\Tags\Reference\Fqsen;

abstract class StudentModuleUnitTestCase extends  UnitTestCase
{
    private $repository;

    /** @return StudentRepository|MockInterface */
    protected function repository()
    {
        return $this->repository = $this->repository ?: $this->mock(StudentRepository::class);
    }

    protected function shouldSaveStudent(Student $student)
    {
        $this->repository()
            ->shouldReceive('save')
            ->with($student)
            ->once()
            ->andReturnNull();
    }

    protected function shouldSearchStudent(string $id, Student $student = null)
    {
        $this->repository()
            ->shouldReceive('search')
            ->with($id)
            ->once()
            ->andReturn($student);
    }
}
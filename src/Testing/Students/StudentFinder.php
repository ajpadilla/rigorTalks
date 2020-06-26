<?php

namespace RigorTalks\Testing\Students;

class StudentFinder
{
    private $repository;

    public function __construct(StudentRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * @param string $id
     * @return Student
     * @throws StudentNotExist
     */
    /*public function __invoke(string $id): Student
    {
        $student = $this->repository->search($id);

        if (null === $student) {
            throw new StudentNotExist($id);
        }

        return $student;
    }*/

    public function find(string $id): Student
    {
        $student = $this->repository->search($id);

        if (null === $student) {
            throw new StudentNotExist($id);
        }

        return $student;
    }

}
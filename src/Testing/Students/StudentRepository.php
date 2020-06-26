<?php

namespace RigorTalks\Testing\Students;

interface StudentRepository
{
    public function save(Student $student);

    public function saveAll(array $students = []);

    public function search(string $id);

    public function all();
}
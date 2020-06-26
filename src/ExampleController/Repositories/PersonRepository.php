<?php

namespace RigorTalks\ExampleController\Repositories;

class PersonRepository
{
     public function findByLastName(string $lastName){
         return $lastName;
     }
}
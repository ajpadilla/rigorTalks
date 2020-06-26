<?php

namespace RigorTalks\ExampleController;

use Laminas\Diactoros\ServerRequest;
use RigorTalks\ExampleController\Models\Person;
use RigorTalks\ExampleController\Repositories\PersonRepository;


class PersonController
{
    private $personRepository;

    public function __construct(PersonRepository $personRepository)
    {
        $this->personRepository = $personRepository;
    }

    public function hello(ServerRequest $request)
    {
        echo "Hello World!";
    }

    public function show(string $lastName)
    {
        /** @var Person $person */
        $person = $this->personRepository->findByLastName($lastName);

        return sprintf("Hello %s %s!", $person->getFirstName(), $person->getLastName());
    }
}
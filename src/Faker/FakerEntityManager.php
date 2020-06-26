<?php

namespace RigorTalks\Faker;


class FakerEntityManager
{
    public function flush()
    {

    }

    public function save($review)
    {
        $this->flush();
    }
}
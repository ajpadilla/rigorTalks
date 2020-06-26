<?php

namespace RigorTalks\Testing\Students;

use Exception;
use Throwable;

class StudentNotExist extends Exception
{
      public function __construct(string $message = "", int $code = 0, Throwable $previous = null)
      {
          parent::__construct($message, $code, $previous);
      }
}
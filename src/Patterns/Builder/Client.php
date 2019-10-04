<?php

namespace RigorTalks\Patterns\Builder;

class Client
{
    /**
     * @var string
     */
   private $type;

    /**
     * Client constructor.
     * @param string $type
     */
   public function __construct(string $type)
   {
       $this->type = $type;
   }

    /**
     * @return bool
     */
   public function isYong()
   {
        return $this->type == 'yong';
   }

    /**
     * @return bool
     */
   public function is10()
   {
       return $this->type == '10';
   }

    /**
     * @return bool
     */
   public function isGold()
   {
        return $this->type == 'gold';
   }

    /**
     * @return bool
     */
   function isStandard()
   {
        return $this->type == 'standard';
   }
}
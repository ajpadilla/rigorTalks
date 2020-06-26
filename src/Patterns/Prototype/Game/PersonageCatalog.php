<?php

namespace RigorTalks\Patterns\Prototype\Game;

class PersonageCatalog
{
    /** @var array  */
   private $personages = [];

    /**
     * PersonageCatalog constructor.
     */
   public function __construct()
   {
   }

   public function addPersonage(Personage $personage)
   {
       $this->personages[] = $personage;
   }

   public function getPersonage(string $personageType)
   {
       return array_filter($this->personages, function ($personage) use ($personageType){
           return is_a($personage, "{$personageType}");
       });
   }

    /**
     * @return array
     */
    public function getPersonages(): array
    {
        return $this->personages;
    }


}
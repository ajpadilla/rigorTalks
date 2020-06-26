<?php

namespace RigorTalks\Patterns\Prototype\Game;

class Game
{
    /** @var PersonageCatalog $personageCatalog */
    private $personageCatalog;

    /**
     * Game constructor.
     */
    public function __construct()
    {
        $this->personageCatalog = new PersonageCatalog();
    }

    public function makePersonage(int $personageType)
    {
        switch ($personageType){
            case 0:
                return new Hero('Hero', 'Hero.png', 10, 10, 15, 100, 'fly');
                break;
            case 1:
                return new Monster('Moster', 'Monster.png', 20, 30, 100, 100, 'hit');
                break;
            case 2:
                return new Prince('Prince', 'Prince.png', 10, 10, 15, 50, 'command');
                break;
            case 3:
                return new villain('Villan', 'Villan.png', 10, 10, 15, 100, 'cheat');
                break;
        }
    }


    public function addPersonageToList(Personage $personage)
    {
        $this->personageCatalog->addPersonage($personage);
    }

    public function getPersonageInstanceFromToList(string $personage)
    {
        return $this->personageCatalog->getPersonage($personage);
    }

    /**
     * @return PersonageCatalog
     */
    public function getPersonageCatalog(): PersonageCatalog
    {
        return $this->personageCatalog;
    }

    public function getAllPersonages()
    {
        return $this->personageCatalog ? $this->personageCatalog->getPersonages() : null;
    }
}
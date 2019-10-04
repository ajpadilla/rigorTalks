<?php

namespace RigorTalks\Patterns\Builder;

use RigorTalks\Patterns\Builder\Products\DebitCards\StandardDebitCard;

class StandardAccountBuilder extends AbstractAccountBuilder
{
    /**
     * @var StandardDebitCard
     */
    private $debitCard = null;

    /**
     * StandardAccountBuilder constructor.
     * @param string $entity
     * @param string $subsidiary
     * @param int $dd
     * @param int $ccc
     * @param string $type
     */
    public function __construct(string $entity, string $subsidiary, int $dd, int $ccc, string $type)
    {
        parent::__construct($entity, $subsidiary, $dd, $ccc, $type);
    }

    public function open()
    {
        $this->makeDebitCard();
    }

    public function makeDebitCard()
    {
        $this->debitCard = new StandardDebitCard();
    }

}
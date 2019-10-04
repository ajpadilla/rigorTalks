<?php

namespace RigorTalks\Patterns\Builder;

use RigorTalks\Patterns\Builder\Products\DebitCards\YoungDebitCard;
use RigorTalks\Patterns\Builder\Products\Gifts\YoungGift;

class YoungAccountBuilder extends AbstractAccountBuilder
{
    /**
     * @var YoungDebitCard
     */
    private $debitCard = null;

    /**
     * @var YoungGift
     */
    private $gift = null;

    /**
     * YoungAccountBuilder constructor.
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
        $this->makeGift();
    }

    public function makeDebitCard()
    {
        $this->debitCard = new YoungDebitCard();
    }

    public function makeGift()
    {
        $this->gift = new YoungGift();
    }
}
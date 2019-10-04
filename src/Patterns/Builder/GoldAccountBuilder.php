<?php

namespace RigorTalks\Patterns\Builder;

use RigorTalks\Patterns\Builder\Products\CreditCards\GoldCreditCard;
use RigorTalks\Patterns\Builder\Products\DebitCards\GoldDebitCard;
use RigorTalks\Patterns\Builder\Products\Gifts\GoldGift;

class GoldAccountBuilder extends AbstractAccountBuilder
{

    /**
     * @var GoldCreditCard
     */
    private $creditCard = null;

    /**
     * @var GoldDebitCard
     */
    private $debitCard = null;

    /**
     * @var GoldGift
     */
    private $gift = null;

    /**
     * GoldAccountBuilder constructor.
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
        $this->makeCreditCard();
        $this->makeDebitCard();
        $this->makeGift();
    }

    public function makeCreditCard()
    {
        $this->creditCard = new GoldCreditCard();
    }

    public function makeDebitCard()
    {
        $this->debitCard = new GoldDebitCard();
    }

    public function makeGift()
    {
        $this->gift = new GoldGift();
    }
}
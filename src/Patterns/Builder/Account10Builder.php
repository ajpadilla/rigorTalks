<?php
namespace RigorTalks\Patterns\Builder;

use RigorTalks\Patterns\Builder\Products\CreditCards\CreditCard10;
use RigorTalks\Patterns\Builder\Products\DebitCards\DebitCard10;
use RigorTalks\Patterns\Builder\Products\Gifts\Gift10;

class Account10Builder extends AbstractAccountBuilder
{

    /**
     * @var CreditCard10
     */
    private $creditCard = null;

    /**
     * @var DebitCard10
     */
    private $debitCard = null;

    /**
     * @var Gift10
     */
    private $gift = null;


    /**
     * Account10Builder constructor.
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
        $this->creditCard = new CreditCard10();
    }

    public function makeDebitCard()
    {
        $this->debitCard = new DebitCard10();
    }

    public function makeGift()
    {
        $this->gift = new Gift10();
    }
}
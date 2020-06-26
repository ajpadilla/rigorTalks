<?php

namespace RigorTalks\Patterns\Adapter\Atm;


class CardAdapter extends Adapter
{

    /**
     * @var Card
     */
    private $card;


    /**
     * CardAdapter constructor.
     * @param Card $card
     */
    public function __construct(Card $card)
    {
        $this->card = $card;
    }

    /**
     * @param string $target
     * @param float $amount
     */
    public function order(string $target, float $amount)
    {
        echo "Transfer money {$amount} into destination account: {$target} from CardAdapter.\n";

        $this->card->transfer($amount,$target);
    }
}
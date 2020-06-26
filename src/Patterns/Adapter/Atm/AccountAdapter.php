<?php

namespace RigorTalks\Patterns\Adapter\Atm;

class AccountAdapter extends Adapter
{
    /**
     * @var Account
     */
    private $account;

    /**
     * AccountAdapter constructor.
     * @param Account $account
     */
    public function __construct(Account $account)
    {
        $this->account = $account;
    }

    /**
     * @param string $target
     * @param float $amount
     */
    public function order(string $target, float $amount)
    {
        echo "Transfer money {$amount} into destination account: {$target} from AccountAdapter.\n";

        $this->account->transfer($amount, $target);
    }

    /**
     * @return Account
     */
    public function getAccount(): Account
    {
        return $this->account;
    }
}
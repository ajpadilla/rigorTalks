<?php

namespace RigorTalks\Patterns\Adapter\RealWord;


class SlackApi
{
    /** @var string */
    private $login;

    /** @var $apiKey */
    private $apiKey;

    /**
     * SlackApi constructor.
     * @param string $login
     * @param string $apiKey
     */
    public function __construct(string $login, string $apiKey)
    {
        $this->login = $login;
        $this->apiKey = $apiKey;
    }


    public function logIn()
    {
        echo "Logged in to a slack account '{$this->login}'.\n";
    }

    /**
     * @param string $chatId
     * @param string $message
     */
    public function sendMessage(string $chatId, string $message)
    {
        echo "Posted following message into the '$chatId' chat: '$message'.\n";
    }

}
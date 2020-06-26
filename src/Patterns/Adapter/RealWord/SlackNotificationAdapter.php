<?php

namespace RigorTalks\Patterns\Adapter\RealWord;

class SlackNotificationAdapter implements Notification
{
    /**
     * @var SlackApi
     */
    private $slackApi;

    /**
     * @var string
     */
    private $chatId;

    public function __construct(SlackApi $slackApi, string $chatId)
    {
        $this->slackApi = $slackApi;
        $this->chatId = $chatId;
    }

    /**
     * @param string $title
     * @param string $message
     */
    public function send(string $title, string $message)
    {
        $slackMessage = "#" . $title . "# " . strip_tags($message);
        $this->slackApi->logIn();
        $this->slackApi->sendMessage($this->chatId, $message);
    }
}
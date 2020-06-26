<?php

namespace RigorTalks\Patterns\Adapter\RealWord;

class EmailNotification implements Notification
{
    /** @var string */
    private $adminEmail;


    /**
     * EmailNotification constructor.
     * @param string $adminEmail
     */
    public function __construct(string $adminEmail)
    {
        $this->adminEmail = $adminEmail;
    }

    public function send(string $title, string $message)
    {
        mail($this->adminEmail, $title, $message);
        echo "Sent email with title '$title' to '{$this->adminEmail}' that says '$message'.";
    }
}
<?php

namespace RigorTalks\Application;

use RigorTalks\Repositories\PostRepository;
use RigorTalks\Repositories\UserRepository;

//CommandHandler
class Publish
{
    private  $userRepository;
    private  $postRepository;

    public function __construct(UserRepository $userRepository, PostRepository $postRepository)
    {
        $this->userRepository = $userRepository;
        $this->postRepository = $postRepository;
    }

    public function execute(PublishCommand $command)
    {
        $user = $this->userRepository->ofIdOrFail($command->userid());
        $post = $this->postRepository->ofIDOrFail($command->postId());

        $user->publish($post);
    }
}

//DTO
class PublishCommand
{
    private $userId;
    private $postId;


    public function __construct($userId, $postId)
    {
        $this->userId = $userId;
        $this->postId = $postId;
    }

    /**
     * @return mixed
     */
    public function userId()
    {
        return $this->userId;
    }

    /**
     * @return mixed
     */
    public function postId()
    {
        return $this->postId;
    }
}

$as = new Publish(new UserRepository(), new PostRepository());
$as->execute(new PublishCommand(1,2));


class LoggerDecorator
{
    private $commandHandler;
    private $monolog;

    public function __construct($commandHandler, $monolog)
    {
        $this->commandHandler = $commandHandler;
        $this->monolog = $monolog;
    }

    public function execute($command)
    {
        $this->monolog->log(serialize($command));

        return $this->commandHandler->execute($command);
    }
}
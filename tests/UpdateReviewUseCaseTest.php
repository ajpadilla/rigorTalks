<?php

namespace RigorTalks\tests;

use PHPUnit\Framework\TestCase;
use RigorTalks\Faker\FakerEntityManager;
use RigorTalks\Faker\FakerLogger;
use RigorTalks\RefactorUseCase\Review;
use RigorTalks\RefactorUseCase\UpdateReviewUseCase;
use RigorTalks\Repositories\EntityRepository;
use RigorTalks\Repositories\SingleRepository;
use RigorTalks\RefactorUseCase\ReviewState;
use RigorTalks\Faker\FakerEventDispatcher;

class UpdateReviewUseCaseTest extends TestCase
{
    /**
     * @test
     */
    public function tryTest()
    {
        $this->assertTrue(true);
    }

    /**
     * @test
     * @expectedException \RigorTalks\RefactorUseCase\ReviewDoesNoExistException
     */
    public function tryToUpdateNonExitingReview()
    {
        (new UpdateReviewUseCase(
            new EntityRepository(),
            null,
            null,
            null
        ))->execute(1);
    }

    /**
     * @test
     * @expectedException \RigorTalks\RefactorUseCase\ReviewNotUpdatebleException
     */
    public function tryToUpdateNonUpdatebleReview()
    {
        $review = new NoUpdatebleReview();

        (new UpdateReviewUseCase(
            new SingleRepository($review),
            null,
            null,
            null
        ))->execute(1);
    }

    /**
     * @test
     *
     */
    public function tryToUpdateAnUpdatebleReview()
    {
        $review = new UpdatebleReview();
        $eventDispatcher = new FakerEventDispatcher();

        $updatedReview = (new UpdateReviewUseCase(
            new SingleRepository($review),
            $eventDispatcher,
            new FakerLogger()
        ))->execute(1, ['extra' => json_encode(range(1,4))]);

        $this->assertSame(range(1, 4), unserialize($updatedReview->getExtra()));
        $this->assertTrue($eventDispatcher->dispatchWasCalled());
    }

    /**
     * @test
     *
     */
    public function tryToUpdateAnUpdatebleReviewWithAllInformation()
    {
        $review = new UpdatebleReview();

        $updatedReview = (new UpdateReviewUseCase(
            new SingleRepository($review),
            new FakerEventDispatcher(),
            new FakerLogger()
        ))->execute(1, ['extra' => null, 'score' => 1, 'idError' => 1]);

        $this->assertSame(1, $updatedReview->getScore());
        $this->assertSame(1, $updatedReview->getIderror());
    }


}

class NoUpdatebleReview
{
    public function getStatus()
    {
        return null;
    }
}


class UpdatebleReview extends Review
{

    public function getAction()
    {
        return $this;
    }

    public function getAssigmen()
    {
        return $this;
    }

    public function getUid()
    {
        return $this;
    }

    public function toArray()
    {
        return [];
    }
}
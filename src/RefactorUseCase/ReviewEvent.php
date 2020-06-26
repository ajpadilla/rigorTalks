<?php

namespace RigorTalks\RefactorUseCase;


class ReviewEvent
{
    private $review;

    public function __construct(Review $review)
    {
        $this->review = $review;
    }

    /**
     * @return Review
     */
    public function getReview(): Review
    {
        return $this->review;
    }


}
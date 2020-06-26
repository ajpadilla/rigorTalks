<?php

namespace RigorTalks\RefactorUseCase;

class UpdateReviewUseCase
{
    protected $reviewRepository;
    protected $entityManager;
    protected $eventDispatcher;
    protected $logger;

    public function __construct($reviewRepository, $eventDispatcher, $logger)
    {
        $this->reviewRepository = $reviewRepository;
        $this->eventDispatcher = $eventDispatcher;
        $this->logger = $logger;
    }

    public function execute($review_id, array $data = array())
    {
        $review = $this->reviewRepository->ofIdOrFail($review_id);

        $review->updateFromArray($data);

        $this->reviewRepository->save($review);

        $this->eventDispatcher->dispatch(ReviewEvents::UPDATED, new ReviewEvent($review));

        $this->logger->create(
            new \DateTime(),
            null,
            $review->getAction()->getAssigmen()->getUid(),
            serialize(array('Review' => SuperLogEvents::REVIEW_UPDATED)),
            serialize(array('action' => $review->getAction()->toArray(),
                'review' => $review->toArray()))
        );
        return $review;
    }
}
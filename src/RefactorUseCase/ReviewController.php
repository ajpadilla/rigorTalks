<?php

namespace RigorTalks\RefactorUseCase;

class ReviewController extends BaseController
{

    public function update($review_id, array $data = array())
    {
        $reviewRepository = $this->getManager()->getRepository('RigorTalks\DocManager\Entity\Review');
        $entityManager = $this->getManager();
        $eventDispatcher = $this->getService('event_dispatcher');
        $logger = $this->getService('superlog_controller');

        return (new UpdateReviewUseCase($reviewRepository,
            $entityManager,
            $eventDispatcher,
            $logger
        ))->execute($review_id, $data);

    }

}
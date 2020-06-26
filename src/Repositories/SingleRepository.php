<?php

namespace RigorTalks\Repositories;

use RigorTalks\RefactorUseCase\ReviewDoesNoExistException;

/**
 * Class SingleRepository
 * @package RigorTalks\Repositories
 */
class SingleRepository
{
    private $item;

    /**
     * SingleRepository constructor.
     * @param $item
     */
   public function __construct($item)
   {
       $this->item = $item;
   }

    /**
     * @return mixed
     */
   public function find()
   {
       return $this->item;
   }

    /**
     * @param $reviewId
     * @return mixed
     * @throws ReviewDoesNoExistException
     */
   public function ofIdOrFail($reviewId)
   {
       $review = $this->find($reviewId);

       if ($review === null){
           throw new ReviewDoesNoExistException();
       }

       return $review;
   }


    public function save($review)
    {
        //$this->flush();
    }
}
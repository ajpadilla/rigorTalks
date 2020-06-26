<?php

namespace RigorTalks\RefactorUseCase;


class Review
{
    protected $score;
    protected $idError;
    protected $extra;

    public function __construct()
    {
    }

    public function update(array $data = [])
    {
        foreach($data as $key => $value){
            if (property_exists($this, $key)){
                $this->{$key} = $value;
            }
        }
    }

    /**
     * @param $data
     * @throws ReviewNotUpdatebleException
     */
    public function updateFromArray($data)
    {
        if ($this->getState() != ReviewState::IN_PROGRESS){
            throw new ReviewNotUpdatebleException();
        }

        $data['extra'] = serialize(json_decode($data['extra']));
        $this->update($data);

        if (isset($data['score'])) {
            $this->setScore($data['score']);
        }
        if (isset($data['idError'])) {
            $this->setIdError($data['idError']);
        }
    }

    /**
     * @param mixed $score
     */
    public function setScore($score)
    {
        $this->score = $score;
    }

    /**
     * @param mixed $idError
     */
    public function setIdError($idError)
    {
        $this->idError = $idError;
    }

    /**
     * @return mixed
     */
    public function getIdError()
    {
        return $this->idError;
    }

    /**
     * @return int
     */
    public function getState()
    {
        return ReviewState::IN_PROGRESS;
    }

    /**
     * @return mixed
     */
    public function getExtra()
    {
        return $this->extra;
    }

    /**
     * @return mixed
     */
    public function getScore()
    {
        return $this->score;
    }

}
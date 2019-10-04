<?php

namespace RigorTalks\Patterns\Builder;

abstract class AbstractAccountBuilder
{
    /**
     * @var string
     */
    protected $entity;

    /**
     * @var string
     */
    protected $subsidiary;

    /**
     * @var int
     */
    protected $dd;

    /**
     * @var int
     */
    protected $ccc;

    /**
     * @var string
     */
    protected $type;

    /**
     * AbstractAccountBuilder constructor.
     * @param string $entity
     * @param string $subsidiary
     * @param int $dd
     * @param int $ccc
     * @param string $type
     */
    public function __construct(string $entity, string $subsidiary, int $dd,int $ccc, string $type)
    {
        $this->entity = $entity;
        $this->subsidiary = $subsidiary;
        $this->dd = $dd;
        $this->ccc = $ccc;
        $this->type = $type;
    }

    public function getData()
    {
        return "Type => {$this->type}, Banking Entity => {$this->entity}, Subsidiary => {$this->subsidiary}, DD => {$this->dd}, CCC => {$this->ccc}";
    }

    abstract public function open();
}
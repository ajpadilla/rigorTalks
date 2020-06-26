<?php

namespace RigorTalks\Patterns\Singleton;

class Operation
{
    /**
     * @var Agent|null
     */
    private $agentInstance;
    /**
     * @var bool
     */
    private $makeQuery;

    /**
     * Operation constructor.
     */
    public function __construct()
    {
        $this->agentInstance = null;
        $this->makeQuery = false;
    }

    /**
     * @param string $sql
     * @return string
     */
    function makeSelectQuery(string $sql)
    {
        echo "makeSelectQuery:{$this->makeQuery}".'<br />';
        if ($this->makeQuery == true) {
            return $this->agentInstance->select($sql);
        }else{
            return "Unable to query database";
        }
    }

    public function createAgent()
    {
        $this->agentInstance = Agent::getAgent();
        print_r($this->agentInstance);
        echo '<br />';
        if ($this->agentInstance == null) {
            $this->makeQuery = false;
        } else {
            $this->makeQuery = true;
        }

        echo "makeQuery:{$this->makeQuery}".'<br />';
    }

    public function setAgentInstance()
    {
        $this->agentInstance->setAllowInstance($this->agentInstance);
    }

    /**
     * @return null|Agent
     */
    public function getAgentInstance(): Agent
    {
        return $this->agentInstance;
    }
}
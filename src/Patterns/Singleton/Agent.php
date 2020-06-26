<?php

namespace RigorTalks\Patterns\Singleton;


class Agent
{
    private static $instance = null;
    private static $allowInstance = false;
    public static $value = 100;

    private function __construct()
    {
    }

    public static function getAgent()
    {
        /*if (self::$allowInstance == false){
            if (self::$instance == null){
                self::$instance = new Agent();
            }
            self::$allowInstance = true;
            return self::$instance;
        }else{
            return null;
        }*/

        if (is_null(self::$instance)) {
            self::$instance = new Agent();
        }
        return self::$instance;
    }

    /**
     * @param Agent $agentInstance
     */
    public static function setAllowInstance(Agent $agentInstance)
    {
        self::$allowInstance = false;
    }

    /**
     * @param string $sql
     * @return string
     */
    public function select(string $sql)
    {
        return "select sql: {$sql}";
    }

    /**
     * @param string $sql
     * @return string
     */
    public function insert(string $sql)
    {
        return "insert sql: {$sql}";
    }

    /**
     * @param string $sql
     * @return string
     */
    public function delete(string $sql)
    {
        return "delete sql: {$sql}";
    }

    /**
     * @return bool
     */
    public static function isAllowInstance(): bool
    {
        return self::$allowInstance;
    }

    /**
     * @param string $sql
     * @return string
     */
    public function update(string $sql)
    {
        return "update sql: {$sql}";
    }


}

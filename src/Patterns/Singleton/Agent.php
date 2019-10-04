<?php

namespace RigorTalks\Patterns\Singleton;


class Agent
{
    private static $instance = null;
    private static $allowInstance = false;

    private function __construct()
    {
    }

    public static function getAgent(): Agent
    {
        if (static::$allowInstance == false){
            if (static::$instance == null){
                static::$instance = new Agent();
            }
            static::$allowInstance = true;
            return static::$instance;
        }else{
            return null;
        }
    }

    public function select(string $sql)
    {
        return "select sql: {$sql}";
    }

    public function insert(string $sql)
    {
        return "insert sql: {$sql}";
    }

    public function delete(string $sql)
    {
        return "delete sql: {$sql}";
    }

    public function update(string $sql)
    {
        return "update sql: {$sql}";
    }
}

<?php
/**
 * Created by PhpStorm.
 * User: alvaro
 * Date: 05/07/19
 * Time: 03:30 PM
 */

namespace RigorTalks;

/**
 * Class TemperatureTestClass
 * @package RigorTalks
 */
class TemperatureTestClass extends Temperature
{
    /**
     * @return int|null
     */
    protected function getThreshold()
    {
        return 50;
    }
}
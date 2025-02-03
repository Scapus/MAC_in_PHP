<?php
require_once 'classes/Driver.php';

class Driverable
{
    private Driver $driver;

    public function __construct(Driver $driver)
    {
        $this->driver = $driver;
    }

    function getDriver(): Driver
    {
        return $this->driver;
    }

    function setDriver(Driver $driver): Driver
    {
        return $this->driver = $driver;
    }
}
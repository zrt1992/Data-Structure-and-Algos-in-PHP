<?php

class Os
{
    private $name;
    private $version;
    private $vendor;

    public function __construct($name, $version, $vendor)
    {
        $this->name = $name;
        $this->version = $version;
        $this->vendor = $vendor;
    }

}

class OsFactory extends OS
{
    public static function makeOs($name, $version, $vendor)
    {
        if ($name = "android") {
            return new Os($name, $version, $vendor);
        }
    }


}

$android = new OsFactory('android', '1.1', 'google');

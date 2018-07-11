<?php

namespace PSR_standard;

class PsrStandard
{
    public $name;
    public $age;

    /**
     * Construct function.
     *
     * @return $this
     */

    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    /**
     * ReturnName function.
     *
     * @return $this
     */
    public function returnName()
    {
        return $this->name;
    }

}

$i = 0;
while ($i < 20) {
    if ($i = 10) {
        break;
    }
    $i++;
}

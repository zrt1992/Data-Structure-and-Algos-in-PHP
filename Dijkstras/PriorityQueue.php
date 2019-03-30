<?php

class PriorityQueue extends SplPriorityQueue
{
    public function compare($priority1, $priority2)
    {
        if ($priority1 === $priority2) return 0;
        return $priority1 > $priority2 ? -1 : 1;
    }

    function insert($value, $priority)
    {
        parent::insert($value, $priority); // TODO: Change the autogenerated stub
    }
}

?>
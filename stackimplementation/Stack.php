<?php
/**
 * Created by PhpStorm.
 * User: zrt1992
 * Date: 3/16/2019
 * Time: 10:31 PM
 */

class Stack
{
    protected $stack;
    protected $limit;

    public function __construct($limit = 10)
    {
        // initialize the stack
        $this->stack = array();
        // stack can only contain this many items
        $this->limit = $limit;
    }

    public function push($item)
    {
        // trap for stack overflow
        if (count($this->stack) < $this->limit) {
            // prepend item to the start of the array
            array_unshift($this->stack, $item);
        } else {
            throw new RunTimeException('Stack is full!');
        }
    }

    public function pop()
    {
        if ($this->isEmpty()) {
            // trap for stack underflow
            throw new RunTimeException('Stack is empty!');
        } else {
            // pop item from the start of the array
            return array_shift($this->stack);
        }
    }

    public function top()
    {
        return current($this->stack);
    }

    public function isEmpty()
    {
        return empty($this->stack);
    }

    public function printStack(){

        print_r($this->stack);

    }


}

$array=[1];
array_unshift($array, 5);
array_unshift($array, 6);

 array_shift($array);
array_shift($array);
print_r($array);

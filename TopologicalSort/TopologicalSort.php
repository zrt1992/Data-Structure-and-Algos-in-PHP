<?php

class Graph
{
    protected $graph;
    protected $visited = [];
    protected $stack;

    function __construct()
    {
        $this->stack = new SplStack();
        $this->graph = array(
            'A' => array('B', 'C'),
            'B' => array('D'),
            'C' => array('D'),
            'D' => array('E'),
            'E' => array('F'),
            'F' => array('A')
        );
    }

    function init()
    {
        foreach ($this->graph as $key => $val) {
            $this->visited[$key] = 0;
        }
    }

    function printVisited()
    {
        echo '<pre>';
        print_r($this->visited);
    }

    function topologicalSort($vertex)
    {
       // echo $vertex . " ";
        $this->visited[$vertex] = 1;
        foreach ($this->graph[$vertex] as $key => $row) {

            if ($this->visited[$row] == 0) {
                $this->visited[$row] = 1;
                $this->topologicalSort($row);
            }



        }
        $this->stack->push($vertex);

    }

    function printTopologicalSort()
    {
        while (!$this->stack->isEmpty()) {
            echo $this->stack->pop();
        }
    }

}

$g = new Graph();
$g->init();
$g->topologicalSort('A');
echo '<br>';
$g->printTopologicalSort();

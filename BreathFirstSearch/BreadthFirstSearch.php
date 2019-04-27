<?php

class Graph
{
    protected $graph;
    protected $visited = [];
    protected $stack;

    function __construct()
    {
        $this->stack = new SplQueue();
        $this->graph = array(
            'A' => array('B', 'S'),
            //'B' => array('A'),
            'B' => [],
            'C' => array('D','E','F','S'),
            'D' =>array('C'),
            'D' => [],
            'E' => array('C', 'H'),
            'F' => array('C', 'G'),
            'G' => array( 'F', 'H','S'),
            'H' => array('E', 'G'),
            'S' => array('A', 'C','G'),
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

    function bfs($vertex)
    {
        echo $vertex. " ";
        $this->visited[$vertex] = 1;
        foreach ($this->graph[$vertex] as $key => $row) {
            if ($this->visited[$row] == 0) {
                $this->stack->enqueue($row);
                $this->visited[$row] = 1;
            }
        }
        if(!$this->stack->isEmpty()) $this->bfs($this->stack->dequeue());

    }



}

$g = new Graph();
$g->init();
$g->bfs('A');


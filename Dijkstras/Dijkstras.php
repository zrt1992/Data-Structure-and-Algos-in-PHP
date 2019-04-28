<?php
/**
 * Created by PhpStorm.
 * User: zrt1992
 * Date: 3/24/2019
 * Time: 10:11 PM
 */

include_once 'PriorityQueue.php';

class Dijkstras
{
    protected $graph;
    protected $visited = [];
    protected $splQueue;
    protected $distances = [];

    function __construct()
    {
        $this->splQueue = new PriorityQueue();
        $this->splQueue->setExtractFlags($this->splQueue::EXTR_BOTH);
        $this->graph = array(
            'A' => array('B' => 3, 'D' => 3, 'F' => 1),
            'B' => array('A' => 3, 'D' => 1, 'E' => 3),
            'C' => array('E' => 2, 'F' => 3),
            'D' => array('A' => 3, 'B' => 1, 'E' => 1, 'F' => 2),
            'E' => array('B' => 3, 'C' => 7, 'D' => 1, 'F' => 5),
            'F' => array('A' => 6, 'C' => 3, 'D' => 2, 'E' => 5),
        );

        $this->init();
    }

    function calMinVals($vertex)
    {

        $this->visited[$vertex] = true;
        foreach ($this->graph[$vertex] as $key => $row) {
            if (($this->distances[$vertex] + $row) <= $this->distances[$key]) {
                $this->distances[$key] = $this->distances[$vertex] + $row;
            }
            if (!$this->visited[$key]) {


                $this->insertInQueue([$key], $row);
                $this->visited[$key] = true;
            }
        }

        if ($this->splQueue->isEmpty()) return;
        $this->splQueue->top();
        if ($this->splQueue->valid()) {
            $data = $this->splQueue->current()['data'][0];
            $this->splQueue->next();
            $this->calMinVals($data);

        }

    }

    function init()
    {
        foreach ($this->graph as $key => $val) {
            $this->visited[$key] = false;
            $this->distances[$key] = INF;
        }
    }

    function initializeDistances($vertex)
    {
        $this->init();
        $this->distances[$vertex] = 0;

        foreach ($this->graph[$vertex] as $key => $val) {
            $this->distances[$key] = $val;
        }


    }

    function insertInQueue($data, $priority)
    {
        $this->splQueue->insert($data, $priority);
    }

    function queueCount()
    {
        return $this->splQueue->count();
    }

    function printDistances()
    {
        echo '<pre>';
        print_r($this->distances);
    }

    function printQueue()
    {
        while ($this->splQueue->valid()) {
            print_r($this->splQueue->current());
            echo "<BR>";
            $this->splQueue->next();
        }
    }

}


$dj = new Dijkstras();
$dj->initializeDistances('A');
$dj->calMinVals('A');
$dj->printDistances();

//echo $dj->printQueue();
//



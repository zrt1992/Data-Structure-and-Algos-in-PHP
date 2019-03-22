
<?php
class Graph{

    private $len = 0;
    private $graph = array();
    private $visited = array();

    public function __construct(){

        $this->graph = array(
            array(0, 1, 1, 0, 0, 0, 0, 0), //0
            array(1, 0, 0, 1, 0, 0, 1, 0), //1
            array(1, 0, 0, 1, 1, 1, 0, 0), //2
            array(0, 1, 1, 0, 1, 0, 0, 0), //3
            array(0, 0, 1, 1, 0, 1, 0, 0), //4
            array(0, 0, 1, 0, 1, 0, 0, 0), //5
            array(0, 0, 0, 0, 0, 0, 0, 1), //6
            array(0, 0, 0, 0, 0, 0, 0, 0) //7
        );

        $this->len = count($this->graph);
        $this->init();
    }

    function init(){

        for ($i = 0; $i < $this->len; $i++) {
            $this->visited[$i] = 0;
        }
    }

    function depthFirst($vertex){

        $this->visited[$vertex] = 1;

        for ($i = 0; $i < $this->len; $i++) {

            if ($this->graph[$vertex][$i] == 1 && !$this->visited[$i]) {
                $this->depthFirst($i);
            }
        }
        echo "$vertex <br>";
    }
}

$g = new Graph();
$g->depthFirst(2);

?>
<?php
$stack = new SplStack();




$graph = array(
    'A' => array('B', 'F'),
    'B' => array('A', 'D', 'E'),
    'C' => array('F'),
    'D' => array('B', 'E'),
    'E' => array('B', 'D', 'F'),
    'F' => array('A', 'E', 'C'),
);

$visited = [];
foreach ($graph as $key => $val) {
    $visited[$key] = 0;
}

function printStack($stack){
    while(!$stack->isEmpty()){
        echo $stack->pop();
    }
}



function dfs($graph, $vertex, &$visited, $stack)
{
    echo $vertex . " ";
    $visited[$vertex] = 1;

    foreach ($graph[$vertex] as $key => $row) {
        if ($visited[$row] == 0) {
            $stack->push($row);
            $visited[$row] = 1;
        }

    }
   while(!$stack->isEmpty()) dfs($graph,$stack->pop(),$visited,$stack);


}

function dfs1($graph, $vertex, &$visited, $stack)
{
    echo $vertex . " ";
    $visited[$vertex] = 1;

    foreach ($graph[$vertex] as $key => $row) {
        if ($visited[$row] == 0) {
            $visited[$row] = 1;
             dfs1($graph, $row, $visited, $stack);
        }

    }



}

dfs($graph, 'A', $visited, $stack);
foreach ($graph as $key => $val) {
    $visited[$key] = 0;
}

echo '<br>';
dfs1($graph, 'A', $visited, $stack);

?>
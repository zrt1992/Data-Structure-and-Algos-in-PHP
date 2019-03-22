<?php
$stack = new SplStack();


$graph = array(
    'A' => array('B', 'F'),
    'B' => array('A', 'D', 'E'),
    'C' => array('F', 'G'),
    'D' => array('B', 'E'),
    'E' => array('B', 'D', 'F'),
    'F' => array('A', 'E', 'C'),
    'G' => array('F')
);

$visited = [];
foreach ($graph as $key => $val) {
    $visited[$key] = 0;
}



function dfs($graph, $vertex, &$visited, $stack)
{
    echo $vertex . " ";
    $visited[$vertex] = 1;
    foreach ($graph[$vertex] as $key => $row) {
        if ($visited[$row] == 0) {
            $stack->add($key, $vertex);
            $visited[$row] = 1;
            dfs($graph, $row, $visited, $stack);
        }

    }

}

dfs($graph, 'B', $visited, $stack);

?>
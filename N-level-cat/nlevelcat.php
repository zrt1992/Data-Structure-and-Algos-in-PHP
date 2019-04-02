<?php

$result[] = ['id' => 1, 'name' => 'A', 'parent_id' => 0];
$result[] = ['id' => 2, 'name' => 'B', 'parent_id' => 0];
$result[] = ['id' => 3, 'name' => 'C', 'parent_id' => 0];
$result[] = ['id' => 4, 'name' => 'D', 'parent_id' => 0];
$result[] = ['id' => 5, 'name' => 'E', 'parent_id' => 1];
$result[] = ['id' => 6, 'name' => 'f', 'parent_id' => 5];
$result[] = ['id' => 7, 'name' => 'G', 'parent_id' => 5];

$categories = [];
foreach ($result as $row) {
    $categories[$row['parent_id']][] = $row;
}
echo '<pre>';
print_r($categories);

function showCategoryTree($categories, $n)
{

    if (isset($categories[$n])) {
        foreach ($categories[$n] as $category) {
            echo str_repeat("-", $n) . "" . $category['name'] . "<br>";
            showCategoryTree($categories, $category['id']);
        }
    }
    return;
}

showCategoryTree($categories, 0);
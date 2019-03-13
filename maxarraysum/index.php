
<?php
// PHP code to find Maximum sum  
// such that no two elements  
// are adjacent 

/* Function to return max sum 
   such that no two elements 
   are adjacent */
function FindMaxSum($arr, $n)
{
    $incl = $arr[0];
    $excl = 0;
  //  $excl_new;


    for ($i = 1; $i <$n; $i++)
    {

        // current max excluding i
        $excl_new = ($incl > $excl)? $incl: $excl;

        // current max including i
        $incl = $excl + $arr[$i];
        $excl = $excl_new;
    }

// return max of incl and excl  
    return (($incl > $excl)? $incl : $excl);
}

// Driver Code 
$arr = array(3 ,5 ,-7, 8, 10);
$n = sizeof($arr);
echo FindMaxSum($arr, $n);

// This code is contributed by Ajit 
?> 
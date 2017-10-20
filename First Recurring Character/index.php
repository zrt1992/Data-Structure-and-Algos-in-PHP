 <?php
 //This code is to find first recurring character in O(n) time.
 
 //First recurring character means that if we have get a "b" and then again we get "b" it means this pair 
 //is the fist one to repeat
 
 //A brute Force approach is to compare each elment one by one using two loops that would be O(n2) solution which 
 //is not very good
 $a = ['a', 'b','b', 'c','a','c'];
        $data = [];




        for ($i = 0; $i<sizeof($a); $i++) {
            if(!isset($data[$a[$i]])){
                $data[$a[$i]] = 1;
            } else {
                if($data[$a[$i]]==1) {
                    echo "we have seen ".$a[$i]." already";
                    return;
                }
                $data[$a[$i]] = (int)$data[$a[$i]] + 1;
            }

        }
        
		?>
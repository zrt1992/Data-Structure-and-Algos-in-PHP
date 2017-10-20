 <?php
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
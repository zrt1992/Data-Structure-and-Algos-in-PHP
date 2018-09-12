<?php

function miniMaxSum($a) {
   
   $temp=[];
   $max=0;
   $highest=['key'=>0,'val'=>0];
   for($i=0;$i<sizeof($a);$i++){
        
    

        if(!isset($temp[$a[$i]])){
          $temp[$a[$i]]=1;
      
        }
        else {
          $temp[$a[$i]] += 1;
        }
		if($temp[$a[$i]]>$highest['val']){
			$highest['val']=$temp[$a[$i]];
			$highest['key']=$a[$i];
			
		}
		

        
   }
 
 print_r($highest['val']);

}


$arr=[44 ,53, 31, 27, 77, 60, 66, 77, 26, 36,];
miniMaxSum($arr);
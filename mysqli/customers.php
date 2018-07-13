<?php
include_once "dbconnect.php";
$anza=new DbConnect();
$mira =new DbConnect();
$save=$mira->add(7,9);
echo $save;
//$connect=$anza->getConnection();
$result=$anza->divide(4,0);
echo '<br>';
echo $result;
die;
 
$result=$connect->query('select * from cutomers');
echo '<table border="1">';
foreach ($result as $row)
{
	
echo'<tr>';
	 
	 echo'<td>';
	 echo $row['Name'];
	 echo'</td>';
	  
	 echo'<td>';
	 echo $row['age'];
	 echo'</td>';
	 
 echo'</tr>';

}
echo '<table>';
?>
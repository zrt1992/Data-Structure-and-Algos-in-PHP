<?php
include_once "dbconnect.php";
$result=$connect->query('select * from products');
echo '<table border="1">';
foreach ($result as $row)
{
	
echo'<tr>';
	 
	 echo'<td>';
	 echo $row['cat_id'];
	 echo'</td>';
	  
	 echo'<td>';
	 echo $row['product_id'];
	 echo'</td>';
	 
	 echo'<td>';
	 echo $row['Name'];
	 echo'</td>';
	  
	 echo'<td>';
	 echo $row['Availability'];
	 echo'</td>';
	 
	  echo'<td>';
	 echo $row['price'];
	 echo'</td>';
	 
 echo'</tr>';

}
echo '<table>';
?>
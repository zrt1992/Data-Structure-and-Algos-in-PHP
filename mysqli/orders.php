<?php
include_once "dbconnect.php";
$connect=DbConnect::getConnection();
$sql="select order_id,quantity, Customer_id, products.name as productname, cutomers.Name as customername FROM cutomers inner join orders on cutomers.cid=orders.Customer_id INNER JOIN products ON products.product_id = orders.product_id";


$result=$connect->query($sql);

echo '<table border="1" width="400" height="150">';
 
	 
foreach ($result as $row)
{
	
echo'<tr>';
	 
	 echo'<td>';
	 echo $row['order_id'];
	 echo'</td>';
	  
	 
	 
	 echo'<td>';
	 echo $row['productname'];
	 echo'</td>';
	 
	  echo'<td>';
	 echo $row['customername'];
	 echo'</td>';
	 
	 echo'<td>';
	 echo $row['Customer_id'];
	 echo'</td>';
	  
	 echo'<td>';
	 echo $row['quantity'];
	 echo'</td>';
 echo'</tr>';

}
echo '<table>';
?>
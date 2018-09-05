<?php

 class DbConnect{
	public static function getConnection(){
		
return $connect = mysqli_connect("localhost", "root", "","coffeeshop");
	}
	
	

}

?>
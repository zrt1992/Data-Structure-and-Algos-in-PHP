<?php

include("Database.php");	//Include MySQL database class
include("Session.php");	//Include PHP MySQL

$handler = new Session();	//Start a new PHP MySQL session
$handler->Login($_GET['username'],$_GET['password']);
if($handler->isLogin()){
    echo "THis is session id == ".$handler->sessionid();
    echo "<br> this is user id == ".$handler->getUserID();
}else{
echo "no";
}

?>
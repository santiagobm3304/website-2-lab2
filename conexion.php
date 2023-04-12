<?php
	function conexion(){
	
	$host = "host=containers-us-west-15.railway.app";
	$port = "port=7202";
	$dbname = "dbname=railway";
	$user = "user=postgres";
	$password = "password=RkP4wrSKnzuAs3v3YuRA";

	$db = pg_connect("$host $port $dbname $user $password");
    
	return $db;
}
?>
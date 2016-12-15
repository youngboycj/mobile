<?php
	$servername = "localhost";
	$username = "root";
	$password = "123456";
	$dbname = "online";
	try{
		$connect = new PDO("mysql:host=$servername;dbname=$dbname",$username,$password);
		echo "连接成功"
	}catch(PDOException $e){
		echo $e->getMessage();
	}
?>
<?php 
	$name = $_POST['Username']; 
	$age = $_POST['Age'];  
	setcookie('$uname',$name,time() + 3600); 
	setcookie('$age',$age,time() + 3600);  
	echo $_COOKIE['$uname']."<br>"; 
	echo $_COOKIE['$age']; 
?> 
<?php 
	$uername = $_POST['Username']; 
	$age = $_POST['Age'];  
	setcookie('$uname',$uername,time() + 3600); 
	setcookie('$age',$age,time() + 3600);  
	echo $_COOKIE['uername']."<br>"; 
	echo $_COOKIE['age']; 
?> 
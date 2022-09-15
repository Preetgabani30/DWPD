<?php 	
		echo "registration successfull.<br>";
		$name = $_GET['name'];
		$pass = $_GET['pass'];
		$gender = $_GET['gender'];
		$age = $_GET['age'];
		$h = $_GET['hobby'];
		$city = $_GET['city'];
		$addr = $_GET['address'];
		echo "your name = ".$name."<br>";
		echo "password = ".$pass."<br>";
		echo "gender = ".$gender."<br>";
		echo "age = ".$age."<br>";
		echo "city = ".$city."<br>";
		echo "---hobbies---<br>";
		foreach ($h as $hobby) {
			echo $hobby."<br>";
		}
		echo "address : ".$addr."<br>";
 ?>
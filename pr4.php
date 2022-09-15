<?php 	
		echo "registration successfull.<br>";
		$name = $_POST['name'];
		$pass = $_POST['pass'];
		$gender = $_POST['gender'];
		$age = $_POST['age'];
		$h = $_POST['hobby'];
		$city = $_POST['city'];
		$addr = $_POST['address'];
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
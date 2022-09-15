<?php
	echo "Arithmetic Operators:-";
	$a=10;
	$b=15;
	echo "Addition of two number is ".$a+$b."<br/>";
	echo "Subtraction of two number is ".$a-$b."<br/>";
	echo "Multiplication of two number is ".$a*$b."<br/>";
	echo "Division of two number is ".$a/$b."<br/>";
	echo "Modulo of two number is ".$a%$b."<br/>";
	echo "<br/>";

	echo "Comparision Operators:-<br/>";
	echo "Double Equals to of two number is ",var_dump($a==$b),"<br/>";
	echo "Identical of two number is ",var_dump($a===$b),"<br/>";
	echo "Not of two number is ",var_dump($a<>$b),"<br/>";
	echo "Not Identical of two number is ",var_dump($a!==$b),"<br/>";
	echo "Greater then of two number is ",var_dump($a>$b),"<br/>";
	echo "Less Then of two number is ",var_dump($a<$b),"<br/>";
	echo "Greater equals to of two number is ",var_dump($a>=$b),"<br/>";
	echo "Less equals of two number is ",var_dump($a<=$b),"<br/>";
	echo "<br/>";
	echo "<br/>";

	echo "Logical Operator:-<br/>";
	echo "AND of two number is ",var_dump($a&&$b),"<br/>";
	echo "OR of two number is ",var_dump($a||$b),"<br/>";
	echo "NOT of number is ",var_dump(!$a),"<br/>";
?>
<?php
	$a=0;
	$b=1;
	$n=10;
	echo "$a<br>";
	echo "$b<br>";
	for($i=2;$i<=$n;$i++)
	{
		$c=$a+$b;
		echo "$c<br>";
		$a=$b;
		$b=$c;
	}
?>
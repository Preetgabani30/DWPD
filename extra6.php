<?php
	$a=1234;
	$rev=0;
	$b=$a;
	while($a>1)
	{
		$rem=$a%10;
		$rev=$rev*10+$rem;
		$a=$a/10;
	}
	echo "reverse number of $b is $rev";
?>
<?php
	$num=153;
	$x=$num;
	$r=0;
        while($num>0)
	{
	 $n=$num%10;
	 $r=$r+$n*$n*$n;
	 $num=$num/10;
	}
	if($r==$x)
	{
	 echo "$x is Armstrong.";
	}
	Else
	{
	 echo "$x is not armstrong";
	}
?>		

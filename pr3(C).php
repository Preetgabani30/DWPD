<?php  
	function sum()  
	{   
		$a=10;
		$b=20;   
		echo "without return type and argument is=".($a+$b)."<br>";   
	}  
	sum();  
	function sum1()  
	{   
		$a=10;   
		$b=20;   
		$c=$a+$b;   
		return $c;  
	}  
	$d=sum1();  
	echo "Sum of two value with return type without argument :- ".$d."<br>";    	function sum2($a,$b)  
	{   
		echo "with argument without return type=".($a+$b)."<br>";   
	}  
	echo sum2(10,20);  
	function sum3($a=10,$b=20)  
	{   
		echo "Sum of two values with default argument =".($a+$b)."<br>";   
	}  
	sum3();  
	function sum4()  
	{   
		$i=func_num_args();   
		echo "number of argument is :=".$i."<br>";   
		$i=func_get_arg(3);   
		echo "number of perticular position is :=".$i."<br>";     
	}  
	sum4(10,11,12,13,15);   
?> 
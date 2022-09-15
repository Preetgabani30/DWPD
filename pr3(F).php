<?php 
	//date function 
	echo "----------Date function----------"."<br>";
	echo date("D/M/Y")."<br>"; 
	echo date("D/m/Y")."<br>"; 
	echo date("D/M/y")."<br>"; 
	echo  date("d/M/Y")."<br>"; 
	echo date("d/m/y")."<br>"; 
	echo date("D/M/Y")."<br>"; 
	echo date_default_timezone_get()."<br>"; 
	echo date("h:I:s")."<br>"; 
	echo  date("H:I:S")."<br>"; 
	echo date("L/F/G")."<br>"; 
	echo date("y/M/Y")."<br>"; 
	echo date("D/m/a")."<br>"; 
	echo "<br>";
	//getdate function 
	echo "----------getdate function---------"."<br>"; 
	print_r(getdate())."<br>"; echo "<br>";
 	//checkdate function 
	echo "----------checkdate function----------"."<br>"; 
	var_dump(checkdate(12,31,2008))."<br>"; 
	echo "<br>"; 
	//time function echo "----------time function "."<br>"; 
	echo time(); 
	echo "<br>";               
	//mktime function 
	echo "----------mktime function----------"."<br>"; 
	echo (date("M-d-Y",mktime(0,0,0,10,29,2010))."<br>"); 
?>
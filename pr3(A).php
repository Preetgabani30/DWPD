<?php 
	echo "simpal array:->"."<br>";
 	$arr=array(10,20,30);  
 	foreach($arr as $values) 
 	{   
		echo $values."<br>"; 
 	}   	
	echo "assosiative array:->"."<br>"; 
	$arr1=array("Dhruv"=>10,"Preet"=>"11","Taral"=>12);  
	foreach($arr1 as $key=>$values)  	
	{   
		echo "key:=".$key,"  ","value:=".$values."<br>"; 
	} 
?>  
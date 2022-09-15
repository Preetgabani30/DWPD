<?php 
	$arr1=array(        
		array(15,10),    	
		array(15,10)       
		);
	$arr2=array(      
		array(15,10),    
		array(15,10)    
		); 
	$result=array(); 
	echo "Addition of two matrix is :="."<br>";  
	for($i=0;$i<2;$i++)  
	{   
		for($j=0;$j<2;$j++)  
 		{     
			$result[$i][$j]=$arr1[$i][$j]+$arr2[$i][$j];	
			echo $result[$i][$j]." "; 
   		}    
		echo "<br>";  
 	} 
  ?> 
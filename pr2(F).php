<?php
	$sub1=79;
	$sub2=89;
	$sub3=99;
	$sum=$sub1+$sub2+$sub3;
	echo "Total Marks of Student is $sum<br>";
	$per=$sum/3;
	echo "percentage is $per<br>";
	switch($per)
	{
		case ($per>90):
			echo "Grade A";
			break;
		case ($per>70 && $per<=90):
			echo "Grade B";
			break;
		case ($per>50 && $per<=70):
			echo "Grade C";
			break;
		case ($per>35 && $per<=50):
			echo "Grade D";
			break;
		case ($per<35):
			echo "Fail";
			break;
		default:
			echo "Invalid Marks you have Entered";
	}
?>
<?php

$a=$_POST['t1'];
$b=$_POST['s1'];
$c=$_POST['d1'];
$d=$_POST['tt1'];
$e=$_POST['tt2'];
$f=$_POST['t2'];


$qwe=1;

if(strlen($e)!=5 || strlen($d)!=5)
{
	echo "<script>alert('Invalid Timings. Enter the time in 24 hr format (HH:MM)');</script>";
	$qwe=0;
}


else if(!($e[0]=='0' || $e[0]=='1' || $e[0]=='2') && ($d[0]=='0' || $d[0]=='1' || $d[0]=='2'))
{
	echo "<script>alert('Invalid Timings. Enter the time in 24 hr format (HH:MM)');</script>";
	$qwe=0;
}

else if(($e[0]=='0' || $e[0]=='1') && strpos("0123456789",$e[1])=='')
{
	echo "<script>alert('Invalid Timings. Enter the time in 24 hr format (HH:MM)');</script>";
	$qwe=0;
}
else if(($d[0]=='0' || $d[0]=='1') && strpos("0123456789",$d[1])=='')
{
	echo "<script>alert('Invalid Timings. Enter the time in 24 hr format (HH:MM)');</script>";
	$qwe=0;
}
else if($e[0]=='2' && strpos("0123",$e[1])=='')
{
	echo "<script>alert('Invalid Timings. Enter the time in 24 hr format (HH:MM)');</script>";
	$qwe=0;
}
else if($d[0]=='2' && strpos("0123",$d[1])=='')
{
	echo "<script>alert('Invalid Timings. Enter the time in 24 hr format (HH:MM)');</script>";
	$qwe=0;
}

else if($e[2]!=':' || $d[2]!=':')
{
	echo "<script>alert('Invalid Timings. Enter the time in 24 hr format (HH:MM)');</script>";
	$qwe=0;
}


else if(!($e[3]=='0' || $e[3]=='1' || $e[3]=='2' || $e[3]=='3' || $e[3]=='4' || $e[3]=='5'))
{
	echo "<script>alert('Invalid Timings. Enter the time in 24 hr format (HH:MM)');</script>";
	$qwe=0;
}
else if(!($d[3]=='0' || $d[3]=='1' || $d[3]=='2' || $d[3]=='3' || $d[3]=='4' || $d[3]=='5'))
{
	echo "<script>alert('Invalid Timings. Enter the time in 24 hr format (HH:MM)');</script>";
	$qwe=0;
}


else if(strpos("0123456789",$e[4])=='' && $e[4]!='0')
{
	echo "<script>alert('Invalid Timings. Enter the time in 24 hr format (HH:MM)');</script>";
	$qwe=0;
}

else if(strpos("0123456789",$d[4])=='' && $d[4]!='0')
{
	echo "<script>alert('Invalid Timings. Enter the time in 24 hr format (HH:MM)');</script>";
	$qwe=0;
}


else if($e<=$d)
{
	echo "<script>alert('Incorrect Timings');</script>";
	$qwe=0;
}
for($i=0;$i<strlen($a);$i++)
{
	if($a[$i]==";")
	{
		echo "<script>alert('Character ; is invalid');</script>";
		$qwe=0;
	}
}
for($i=0;$i<strlen($f);$i++)
{
	if($f[$i]==";")
	{
		echo "<script>alert('Character ; is invalid');</script>";
		$qwe=0;
	}
}

if($qwe==0)
	echo "<script>window.open(window.history.back(),'_self');</script>";

else{

include "link.php";	

$conn=openCon();
$k=0;
$t="SELECT * FROM workshop ORDER BY no,dat,tfr";
$a=mysqli_query($conn,$t);
while($row=mysqli_fetch_array($a))
{
	if(strcmp($row['no'],$b)==0 && strcmp($row['dat'],$c)==0)
	{
		if($row['tfr']<$d && $d<$row['tto'])
			$k=1;
		else if($row['tfr']<$e && $e<$row['tto'])
			$k=1;
		else if($d<$row['tfr'] && $e>$row['tfr'])
			$k=1;
	}
}
if($k==1)
	echo "<script>alert('Workshop taking place');	window.open(window.history.back(),'_self');</script>";
else
{
	$a=(string)$_POST['t1'];
	$b=(string)$_POST['s1'];
	$c=(string)$_POST['d1'];
	$d=(string)$_POST['tt1'];
	$e=(string)$_POST['tt2'];
	$f=(string)$_POST['t2'];
	$p="INSERT INTO workshop(name,no,dat,tfr,tto,det) VALUES('$a','$b','$c','$d','$e','$f')";
	$a=mysqli_query($conn,$p);
	if($a)
		echo "<script>alert('Workshop details added');	window.open('facwk.php','_self');</script>";
}
}
?>
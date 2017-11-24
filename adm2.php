<?php

$fromdate=$_POST['d1'];
$todate=$_POST['d2'];

if($fromdate>$todate)
		echo "<script>alert('Incorrect dates');	window.close();</script>";
else{

include 'link.php';

$conn=openCon();

$a = "SELECT * FROM workshop ORDER BY dat,tfr,no";

$result=mysqli_query($conn,$a);


$file = fopen("workshop-ch.csv","w");

$k=0;
$list=array();
$list[$k++]= "Date;From;To;Lab Number;Workshop Details;Faculty Name";
$list[$k++]= ";;;;;";


while($m=mysqli_fetch_array($result))
{
	$i=$m['sno'];
	if($fromdate<=$m['dat'] && $m['dat']<=$todate)
		$list[$k++]=$m['dat'].";".$m['tfr'].";".$m['tto'].";".$m['no'].";".$m['det'].";".$m['name'];
}

foreach ($list as $line)
{
  fputcsv($file,explode(';',$line));
}

fclose($file);

header('Content-type: application/csv');
header('Content-Disposition: attachment; filename="workshop-ch.csv"');
readfile('workshop-ch.csv');

}
?>
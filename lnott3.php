<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css" />
		<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
		<script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
		<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	</head>
<style>

html, body{
	height: 100%;
}
table.table4{
	table-layout: fixed;
	border-collapse: collapse;
	width: 100%;
	min-width: 800px;
	height: 100%;
	border:1px solid black;
}
table.table4 th{
	border:1px solid black;
	text-align: center;
	height:20px;
	width: 4%;
}
table.table4 td{
	height:20px;
	width: 4%;
	text-align: center;
	border:1px solid black;
}
table.table4 tr{
	border-bottom: 1px solid black;
	width: 4%;
}
p{
	cursor: default;
}
a:link {
    text-decoration: none;
    color: black;
}
.pos{
	position: relative;
	left: 25px;
}
</style>
</html>

<?php

$i=$_GET['i'];;


include 'link.php';

$conn=openCon();

$a = "SELECT * FROM lab,incharge WHERE (incharge.block=lab.block and incharge.cno=lab.cno)";

$result=mysqli_query($conn,$a);

$j=0;
while($j<=$i)
	{
		$row=mysqli_fetch_array($result); 
		$j++;
	}

$fn=$row['inc_no'];
$fm=$row['inc_mail'];
if($fn=="")
	$fn="NIL";
if($fm=="")
	$fm="NIL";
$an=$row['ast_no'];
$am=$row['ast_mail'];
if($an=="")
	$an="NIL";
if($am=="")
	$am="NIL";

$fd="Mobile No: ".$fn."<br />Maid ID: ".$fm;
$ad="Mobile No: ".$an."<br />Maid ID: ".$am;


echo "<h2 class='pos'>".$row['block']." ".$row['cno']."</h2>";
 
echo "
<div class='container'>
<div class='table-responsive'>
<table class='table4' align='center' height=60%>

<tr bgcolor='#CECCFD'>
<th rowspan='2' bgcolor='#C3C4C2'>Theory</th><th bgcolor='#C3C4C2'>Start</th><th>08:00</th><th>08:55</th><th>09:50</th><th>10:45</th><th>11:40</th><th></th><th rowspan='14' bgcolor='#C3C4C2'>Lunch</th><th>14:00</th><th>14:55</th><th>15:50</th><th>16:45</th><th>17:40</th><th>-</th>
</tr>
<tr bgcolor='#CECCFD'>
<th bgcolor='#C3C4C2'>End</th><th>08:50</th><th>09:45</th><th>10:40</th><th>11:35</th><th>12:30</th><th></th><th>14:50</th><th>15:45</th><th>16:40</th><th>17:35</th><th>18:30</th><th></th>
</tr>
<tr bgcolor='#9DD2FF'>
<th rowspan='2' bgcolor='#C3C4C2'>Lab</th><th bgcolor='#C3C4C2'>Start</th><th>08:00</th><th>-</th><th>09:50</th><th>-</th><th>11:40</th><th>-</th><th>14:00</th><th>-</th><th>15:50</th><th>-</th><th>17:40</th><th>-</th>
</tr>
<tr bgcolor='#9DD2FF'>
<th bgcolor='#C3C4C2'>End</th><th>-</th><th>09:40</th><th>-</th><th>11:30</th><th>-</th><th>13:20</th><th>-</th><th>15:40</th><th>-</th><th>17:30</th><th>-</th><th>19:20</th>
</tr>

<tr bgcolor='#FDFFCE'>
	<td rowspan='1' colspan='2' bgcolor='#C3C4C2'><b>MONDAY</b></td>
	<td colspan='2'><b>".$row['l1']."</b></td>
	<td colspan='2'><b>".$row['l3']."</b></td>
	<td colspan='2'><b>".$row['l5']."</b></td>
	<td colspan='2'><b>".$row['l31']."</b></td>
	<td colspan='2'><b>".$row['l33']."</b></td>
	<td colspan='2'><b>".$row['l35']."</b></td>	
</tr>

<tr bgcolor='#FDFFCE'>
	<td rowspan='1' colspan='2' bgcolor='#C3C4C2'><b>TUESDAY</b></td>
	<td colspan='2'><b>".$row['l7']."</b></td>
	<td colspan='2'><b>".$row['l9']."</b></td>
	<td colspan='2'><b>".$row['l11']."</b></td>
	<td colspan='2'><b>".$row['l37']."</b></td>
	<td colspan='2'><b>".$row['l39']."</b></td>
	<td colspan='2'><b>".$row['l41']."</b></td>
</tr>

<tr bgcolor='#FDFFCE'>
	<td rowspan='1' colspan='2' bgcolor='#C3C4C2'><b>WEDNESDAY</b></td>
	<td colspan='2'><b>".$row['l13']."</b></td>
	<td colspan='2'><b>".$row['l15']."</b></td>
	<td colspan='2'><b>Extramural</b></td>
	<td colspan='2'><b>".$row['l43']."</b></td>
	<td colspan='2'><b>".$row['l45']."</b></td>
	<td colspan='2'><b>".$row['l47']."</b></td>
</tr>

<tr bgcolor='#FDFFCE'>
	<td rowspan='1' colspan='2' bgcolor='#C3C4C2'><b>THURSDAY</b></td>
	<td colspan='2'><b>".$row['l19']."</b></td>
	<td colspan='2'><b>".$row['l21']."</b></td>
	<td colspan='2'><b>".$row['l23']."</b></td>
	<td colspan='2'><b>".$row['l49']."</b></td>
	<td colspan='2'><b>".$row['l51']."</b></td>
	<td colspan='2'><b>".$row['l53']."</b></td>
</tr>

<tr bgcolor='#FDFFCE'>
	<td rowspan='1' colspan='2' bgcolor='#C3C4C2'><b>FRIDAY</b></td>
	<td colspan='2'><b>".$row['l25']."</b></td>
	<td colspan='2'><b>".$row['l27']."</b></td>
	<td colspan='2'><b>".$row['l29']."</b></td>
	<td colspan='2'><b>".$row['l55']."</b></td>
	<td colspan='2'><b>".$row['l57']."</b></td>
	<td colspan='2'><b>".$row['l59']."</b></td>
</tr>

</table></div></div>

<div class='pos'>
<br><b>Lab Incharge: </b><a href='#popupBasic1' data-rel='popup' data-transition='pop'>Prof. ".$row['inc_name']."</a>




<br><b>Lab Assistant: </b><a href='#popupBasic2' data-rel='popup' data-transition='pop'>".$row['ast_name']."</a>

<div data-role='popup' id='popupBasic1'>
<p>".$fd."</p>
</div>

<div data-role='popup' id='popupBasic2'>
<p>".$ad."</p>
</div></div>";


?>
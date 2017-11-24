<?php

session_start();

error_reporting(0);

include 'passwords.php';

$flag=0;

$u=$_POST['t1'];
$p=$_POST['t2'];

if(isset($_SESSION["admpass"]) && isset($_SESSION["admuser"]))
	$flag=1;
else if(strcmp($admin_username,$u)!=0 || strcmp($admin_password,$p)!=0)
	echo "<script>alert('Invalid Credentials');window.open('index.php','_self');</script>";
else
{
	$flag=1;
	$_SESSION["admpass"]=$p;
	$_SESSION["admuser"]=$u;
}

include 'navbar.php';

?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<style type="text/css">
	.tab td{
		text-align: center;
	}
	.tab th{
		background-color: blue;
		color: white;
		text-align: center;
		min-width: 100px;
	}
	.tab tr:nth-child(even){
		background-color: #e6e6e6;
	}
	.tab{
		cursor: default;
		white-space: nowrap;
		width: 100%;
	}
	a{
		cursor: pointer;
		color: red;
	}
	a:hover{
		color: red;
	}
	h3{
		margin-left: 50px;
	}
	.down{
		color: black;
	}
	.down:hover{
		color: black;
		text-decoration: none;
	}
	.down:visited {
    	color: black;
		text-decoration: none;
	}
	button:hover{
		background-color:#595959; 
	}
	button,input[type=submit]{
    	background-color: #bfbfbf;
    	border: none;
    	color: white;
    	padding: 4px 8px;
    	text-align: center;
    	text-decoration: none;
    	display: inline-block;
    	font-size: 16px;
    	margin: 4px 2px;
    	cursor: pointer;
    	border-radius: 4px;
    	color: black;
	}
	input[type="submit"]:hover{
		background-color:#595959;
		color: black;
	}
	input[type=date]{
		width: 15%;
		min-width: 200px;
    	padding: 0px 0px;
    	margin: 8px 0;
    	margin-left: 20px;
    	display: inline-block;
    	border: 1px solid #ccc;
    	border-radius: 4px;
    	box-sizing: border-box;
	}
	form{
		margin-left: 75px;
	}
	.navbar-nav .active a{
      background: #999999 !important;
 	}
 	.logoutLblPos{
   		position:fixed;
   		right:20px;
   		top:55px;
	}
	.hovlog:hover{
		background-color: #ff8000;
		border-radius: 4px;
	}
</style>
<body>
<nav class="navbar navbar-inverse navbar-static-top">
        <div class="container-fluid">

            <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mainNavBar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="http://chennai.vit.ac.in/" class="navbar-brand">VITCC</a>
        </div>

            <div class="collapse navbar-collapse" id="mainNavBar">
                <ul class="nav navbar-nav">
                    <li><a href="index.php">Search by slot</a></li>
                    <li><a href="dropdown.php">Search by lab number</a></li>
                    <li class="drdn">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">FFCS <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li class="sel"><a href="https://academicscc.vit.ac.in/student/stud_login.asp">Student Login</a></li>
                            <li class="sel"><a href="https://academicscc.vit.ac.in/faculty/fac_login.asp">Faculty Login</a></li>
                        </ul>
                    </li>
                    <li class="drdn">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Workshops <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li class="sel"><a href="stwk.php">View</a></li>
                            <li class="sel"><a href="facwk.php">Faculty Login</a></li>
                            <li class="active" class="sel"><a href="admwk.php">Admin Login</a></li>
                        </ul>
                    </li>
                    <li><a href="http://moodlecc.vit.ac.in">Moodle</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="contact.php">Contact</a></li>
                </ul>
            </div>

        </div>
</nav>

<form align="right" name="form1" method="post" action="log_out2.php">
  <label class="logoutLblPos hovlog">
  <input style="background-color: #ffb366; font-weight:normal;" name="submit2" type="submit" id="submit2" value="Sign out">
  </label>
</form>

</body>
</html>

<?php

if($flag==1)	{
include 'link.php';

$conn=openCon();

$a = "SELECT * FROM workshop ORDER BY dat,tfr,no";

$result=mysqli_query($conn,$a);


$file = fopen("workshop-date.csv","w");

$k=0;
$list=array();
$list[$k++]= "Date;From;To;Lab Number;Workshop Details;Faculty Name";
$list[$k++]= ";;;;;";


echo "<h3>Date Wise</h3>";
echo "<div class='container'>
		<div class='table-responsive'>
		<table class='tab'>
		<tr><th>Date</th><th>From</th><th>To</th><th>Lab Number</th><th>Workshop Details</th><th>Faculty Name</th>";
while($m=mysqli_fetch_array($result))
{
	$i=$m['sno'];
	echo "<tr><td>".$m['dat']."</td><td>".$m['tfr']."</td><td>".$m['tto']."</td><td>".$m['no']."</td><td>".$m['det']."</td><td>".$m['name']."</td><td><a onclick='del(".$i.")'>Delete</a></td></tr>";

	$list[$k++]=$m['dat'].";".$m['tfr'].";".$m['tto'].";".$m['no'].";".$m['det'].";".$m['name'];
}

foreach ($list as $line)
{
  fputcsv($file,explode(';',$line));
}

echo "</table></div></div><br>";

fclose($file);
echo "<center><button><a class='down' href='workshop-date.csv' download>Download</a></button></center><br><br>";


$a = "SELECT * FROM workshop ORDER BY no,dat,tfr";
$result=mysqli_query($conn,$a);

$file = fopen("workshop-lno.csv","w");

$k=0;
$list=array();
$list[$k++]= "Lab Number;Workshop Details;Faculty Name;Date;From;To";
$list[$k++]= ";;;;;";

echo "<h3>Lab Wise</h3>";
echo "<div class='container'>
		<div class='table-responsive'>
		<table class='tab'>
		<tr><th>Lab Number</th><th>Workshop Details</th><th>Faculty Name</th><th>Date</th><th>From</th><th>To</th>";
while($m=mysqli_fetch_array($result))
{
	$i=$m['sno'];
	echo "<tr><td>".$m['no']."</td><td>".$m['det']."</td><td>".$m['name']."</td><td>".$m['dat']."</td><td>".$m['tfr']."</td><td>".$m['tto']."</td><td><a onclick='del(".$i.")'>Delete</a></td></tr>";
	$list[$k++]=$m['no'].";".$m['det'].";".$m['name'].";".$m['dat'].";".$m['tfr'].";".$m['tto'];
}

foreach ($list as $line)
{
  fputcsv($file,explode(';',$line));
}

echo "</table></div></div><br>";

fclose($file);
echo "<center><button><a class='down' href='workshop-lno.csv' download>Download</a></button></center>";


echo "<h3>Report</h3>";
?>

<script type="text/javascript">
	function del(i)
	{
		x=confirm('Do you want to delete it?');
		if(x==1)
		{
			window.open("del.php?x="+i,"_self");
		}
	}
</script>

<html>
<body>
	<form action="adm2.php" method="post" target="_blank">
		<label>From:</label><br>
		<input type='text' name='d1' required id='datepicker1' placeholder='yyyy-mm-dd'>
		<br><br><label>To:</label><br>
		<input type='text' name='d2' required id='datepicker2' placeholder='yyyy-mm-dd'>
		<br><br><input style="margin-left: 40px" type="submit" value="Download">
	</form>
</body>
</html>

<?php

$sd=(string)date('Y-m-d');


$a = "SELECT * FROM workshop WHERE dat<'$sd' ORDER BY dat,tfr,no";
$result=mysqli_query($conn,$a);

$file = fopen("workshop-comp.csv","w");

$k=0;
$list=array();
$list[$k++]= "Date;Workshop Details;Faculty Name;Lab Number;From;To";
$list[$k++]= ";;;;;";

echo "<br><br><h3>Completed Workshops</h3>";
echo "<div class='container'>
		<div class='table-responsive'>
		<table class='tab'>
		<tr><th>Date</th><th>Workshop Details</th><th>Faculty Name</th><th>Lab Number</th><th>From</th><th>To</th></tr>";
while($m=mysqli_fetch_array($result))
{
	$i=$m['sno'];
	echo "<tr><td>".$m['dat']."</td><td>".$m['det']."</td><td>".$m['name']."</td><td>".$m['no']."</td><td>".$m['tfr']."</td><td>".$m['tto']."</td><td><a onclick='del(".$i.")'>Delete</a></td></tr>";
	$list[$k++]=$m['dat'].";".$m['det'].";".$m['no'].";".$m['name'].";".$m['tfr'].";".$m['tto'];
}

foreach ($list as $line)
{
  fputcsv($file,explode(';',$line));
}

echo "</table></div></div><br>";

fclose($file);
echo "<center><button><a class='down' href='workshop-comp.csv' download>Download</a></button></center><br><br>";

$a = "SELECT * FROM workshop WHERE dat>'$sd' ORDER BY dat,tfr,no";
$result=mysqli_query($conn,$a);

$file = fopen("workshop-upc.csv","w");

$k=0;
$list=array();
$list[$k++]= "Date;Workshop Details;Faculty Name;Lab Number;From;To";
$list[$k++]= ";;;;;";

echo "<h3>Upcoming Workshops</h3>";
echo "<div class='container'>
		<div class='table-responsive'>
		<table class='tab'>
		<tr><th>Date</th><th>Workshop Details</th><th>Faculty Name</th><th>Lab Number</th><th>From</th><th>To</th></tr>";
while($m=mysqli_fetch_array($result))
{
	$i=$m['sno'];
	echo "<tr><td>".$m['dat']."</td><td>".$m['det']."</td><td>".$m['name']."</td><td>".$m['no']."</td><td>".$m['tfr']."</td><td>".$m['tto']."</td><td><a onclick='del(".$i.")'>Delete</a></td></tr>";
	$list[$k++]=$m['dat'].";".$m['det'].";".$m['no'].";".$m['name'].";".$m['tfr'].";".$m['tto'];
}

foreach ($list as $line)
{
  fputcsv($file,explode(';',$line));
}

echo "</table></div></div><br>";

fclose($file);
echo "<center><button><a class='down' href='workshop-upc.csv' download>Download</a></button></center>";
}
?>

<script>
	$( function() {
    $( "#datepicker1" ).datepicker({
      changeMonth: true,
      changeYear: true,
      dateFormat: 'yy-mm-dd'
    });
    $( "#datepicker2" ).datepicker({
      changeMonth: true,
      changeYear: true,
      
      dateFormat: 'yy-mm-dd'
    });
  } );
</script>
<?php
error_reporting(0);
include "navbar.php";

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<style type="text/css">
	td{
		text-align: center;
	}
	th{
		background-color: blue;
		color: white;
		text-align: center;
		min-width: 100px;
	}
	tr:nth-child(even){
		background-color: #e6e6e6;
	}
	table{
		cursor: default;
		white-space: nowrap;
		width: 100%;
	}
	h3{
		margin-left: 50px;
	}
    .navbar-nav .active a{
      background: #999999 !important;
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
                            <li class="active" class="sel"><a href="stwk.php">View</a></li>
                            <li class="sel"><a href="facwk.php">Faculty Login</a></li>
                            <li class="sel"><a href="admwk.php">Admin Login</a></li>
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
</body>
</html>

<?php

include 'link.php';
$conn=openCon();

$sd=(string)date('Y-m-d');

$a = "SELECT COUNT(*) FROM workshop WHERE dat='$sd'";
$result=mysqli_query($conn,$a);
$m=mysqli_fetch_array($result);

if($m[0]>0)
    include 'cur.php';

$a = "SELECT * FROM workshop ORDER BY dat,tfr,no";

$result=mysqli_query($conn,$a);

echo "<h3>Workshop Details</h3>";
echo "<div class='container'>
		<div class='table-responsive'>
		<table>
		<tr><th>Date</th><th>From</th><th>To</th><th>Lab Number</th><th>Workshop Details</th><th>Faculty Name</th>";
while($m=mysqli_fetch_array($result))
{
	echo "<tr><td>".$m['dat']."</td><td>".$m['tfr']."</td><td>".$m['tto']."</td><td>".$m['no']."</td><td>".$m['det']."</td><td>".$m['name']."</td></tr>";
}

echo "</table></div></div><br><br>";


$sd=(string)date('Y-m-d');

$a = "SELECT * FROM workshop WHERE dat<'$sd' ORDER BY dat,tfr,no";

$result=mysqli_query($conn,$a);

echo "<h3>Completed Workshops</h3>";
echo "<div class='container'>
		<div class='table-responsive'>
		<table>
		<tr><th>Date</th><th>Workshop Details</th><th>Faculty Name</th><th>Lab Number</th><th>From</th><th>To</th></tr>";
while($m=mysqli_fetch_array($result))
{
	echo "<tr><td>".$m['dat']."</td><td>".$m['det']."</td><td>".$m['name']."</td><td>".$m['no']."</td><td>".$m['tfr']."</td><td>".$m['tto']."</td></tr>";
}

echo "</table></div></div><br><br>";

$a = "SELECT * FROM workshop WHERE dat>'$sd' ORDER BY dat,tfr,no";

$result=mysqli_query($conn,$a);

echo "<h3>Upcoming Workshops</h3>";
echo "<div class='container'>
		<div class='table-responsive'>
		<table>
		<tr><th>Date</th><th>Workshop Details</th><th>Faculty Name</th><th>Lab Number</th><th>From</th><th>To</th></tr>";
while($m=mysqli_fetch_array($result))
{
	echo "<tr><td>".$m['dat']."</td><td>".$m['det']."</td><td>".$m['name']."</td><td>".$m['no']."</td><td>".$m['tfr']."</td><td>".$m['tto']."</td></tr>";
}

echo "</table></div></div><br><br>";

?>
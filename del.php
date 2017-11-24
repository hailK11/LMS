<?php

$i=$_GET['x'];
include "link.php";
$conn=openCon();
$a = "DELETE FROM workshop WHERE sno=".$i.";";
mysqli_query($conn,$a);
echo "<script>window.open('admwk.php','_self')</script>";

?>
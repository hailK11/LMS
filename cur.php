<style>
	.curdisp{
		color: red;
		font-size: 17px;
		font-weight: bold;
		font-family: "Times New Roman", Times, serif;
		margin-left: 5%;
	}

</style>

<?php

$sd=(string)date('Y-m-d');

$a = "SELECT * FROM workshop WHERE dat='$sd' ORDER BY tfr,no";

$result=mysqli_query($conn,$a);

echo "<h3>Workshops Taking Place</h3>";

while($m=mysqli_fetch_array($result))
{
	echo "<p class='curdisp'>".$m['det']." in ".$m['no']." from ".$m['tfr']." to ".$m['tto']."</p>";
}

?>
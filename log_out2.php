<?php

session_start();
unset($_SESSION['admpass']);
unset($_SESSION['admuser']);

echo "<script> window.open('index.php','_self');</script>";

?>
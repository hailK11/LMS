<?php

session_start();
unset($_SESSION['facpass']);
unset($_SESSION['facuser']);

echo "<script> window.open('index.php','_self');</script>";

?>
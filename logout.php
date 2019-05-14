<?php
session_start();
if(isset($_SESSION['sid']))
{
    unset($_SESSION['collegeName']);
    session_destroy();
	echo "<script>window.location='index.php';</script>";
}else{
    echo "<h1>faill......</h1>";
}
?>
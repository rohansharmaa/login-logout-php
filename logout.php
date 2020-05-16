<?php
session_start();

if(!isset($_SESSION['userid']))
{
	header("Location: welcome.php");
}
else if(isset($_SESSION['user'])!="")
{
	header("Location: index.php");
}

if(isset($_GET['logout']))
{
	session_destroy();
	unset($_SESSION['userid']);
	header("Location: index.php");
}
?>

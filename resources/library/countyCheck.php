<?php
//----------------
//  Checks to see if county set, if county set then it turns the county into 
//  a session so that the county can be saved in cookies and the user doesn't
//  have to constantly re-select his county. If there is no ?county='x' then 
//  nothing happens, if it exists, then a session is created of x
//----------------

if(isset($_GET['county']))
{
	$_SESSION['county']=$_GET['county'];
	$county=$_SESSION['county'];
	header("location:$root/index.php");
	if ($county=='')
	{
		header("location:$root/index.php");
	}
}
?>
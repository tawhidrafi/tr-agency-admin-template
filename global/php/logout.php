<?php
	session_start ();
	//checking if it is a valid login
	if(!isset($_SESSION['login']) && $_SESSION['login'] != true ) {
		//if no login, redirect to login page
		header ('location: login.php');
	}
	//connecion with database
	include 'assets/php/connection.php';
	//logging user out
	session_destroy ();
	//redirect to login page
	header ('location: login.php');
?>
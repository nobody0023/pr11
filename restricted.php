<?php 
   session_start (); 
   require_once 'connection.php'; 
   $login = $_SESSION ['Login']; 
   $password = $_SESSION ['Password'];
   $res = mysqli_query ($conn, "SELECT * FROM users WHERE login ='$login' and password = '$password'");
   $row = mysqli_fetch_array($res);
   $_SESSION['first_name'] = $row['first_name'];
	$_SESSION['last_name'] = $row['last_name'];
   echo "Добро пожаловать, ".$_SESSION['first_name']." ".$_SESSION['last_name'];
  ?> 

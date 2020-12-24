<?php
   //session_start();
   require_once 'connection.php'; //підключення скрипту
   $login = $_SESSION ['Login']; 
   $password = $_SESSION ['Password']; 
     if (count($_POST)>0) {
       $res = mysqli_query ($conn, "SELECT * FROM users WHERE login ='$login' and password = '$password'");
       $row = mysqli_fetch_array($res);
		if (is_array($row)){
			$_SESSION['Login'] = $row['login'];
			$_SESSION['Password'] = $row['password'];
         Header ("Location: restricted.php"); 
   } else {
     echo 'Invalid password';
     echo "<html> 
         <head><title>Information</title>
         <a href='login.php'>Авторизироваться</a>
         </head> 
         </html> ";
      }
   }
   ?> 

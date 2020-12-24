<?php
    session_start (); 
   if (!isset ($_POST ['button'])){ 
      echo "<form method='POST'>
         Логин:&nbsp&nbsp <input type='text' name='log'><br>
         Пароль: <input type='password' name='pw'><br>
         <input type='submit' name='button' value='Enter'></form>
         <a class='btn' href='connection.php'>Посмотреть всех пользователей</a><hr>";
         
   } 

   else { 
      $_SESSION ['Login']=$_POST ['log']; 
      $_SESSION ['Password']=$_POST ['pw']; 
      include "auth.php";
   } 
   ?>
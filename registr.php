<?php
    session_start (); 
    require_once 'connection.php'; 
   if (!isset ($_POST ['button'])){ 
      echo "<form method='POST'>
         Имя: <input type='text' name='first_name'><br>
         Фамилия: <input type='text' name='last_name'><br>
         Логин: <input type='text' name='login'><br>
         Пароль: <input type='password' name='password'><br>
         <input type= 'file' name='fileToUpload'><br><br>
         <input type='submit' name='button' value='Enter'><br></form>";
      echo "Уже зарегистрированы?" ;
      echo "<html> 
         <head><title>Information</title>
         <a href='login.php'>Авторизироваться</a>
         </head> 
         </html> ";
   } 

   else { 
      $first_name = $_POST ['first_name']; 
      $last_name = $_POST ['last_name']; 
      $login = $_POST ['login']; 
      $password = $_POST ['password']; 

      $res = "INSERT INTO users (first_name, last_name, login, password, id_role)VALUES ('$first_name', '$last_name', '$login', '$password', 1)";
      $row = mysqli_query($conn, $res) or die("Ошибка " . mysqli_error($conn));
      Header ("Location: restricted.php");
   } 
   ?>
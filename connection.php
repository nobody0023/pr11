<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "testdb"; //повинна бути створена в субд

// Встановлення з'єднання
$conn = new mysqli($servername, $username, $password, $database);

$sql = "SELECT id, login, password, first_name, last_name, id_role, img FROM users";
$result = $conn->query($sql);
echo '<h1 align="center">Пользователи</h1>';
if ($result->num_rows > 0) {
    echo '<table border="1" cellpadding = "4" cellspacing ="0" align="center">';
    echo '<tr> 
        <td>ID</td> 
        <td>First name</td> 
        <td>Last name</td> 
        <td>Login</td> 
        <td>Password</td> 
        <td>Id Role</td> 
        <td>Photo</td> 
    </tr>';

    while ($row = $result->fetch_assoc()) {
        echo '<tr align="center">';
        echo '<td>'. $row["id"] . '</td>';
        echo '<td>' . $row["first_name"] . '</td>';
        echo '<td>' . $row["last_name"] . '</td>';
        echo '<td>' . $row["login"] . '</td>';
        echo '<td>' . $row["password"] . '</td>';
        echo '<td>' . $row["id_role"] . '</td>';
        echo '<td>' ."<img src = ".$row["img"]." width='200' height='200'>". '</td>';
        echo '</tr>';
    }
    echo '</table>';
}
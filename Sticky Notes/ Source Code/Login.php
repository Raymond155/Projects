<?php
include 'connection.php';
$ID = $_POST['ID'];
$email = $_POST['email'];
$pass = $_POST['pass'];

$sql = "select * from record2 where email='$email' and pass='$pass'";


$result = $link->query($sql);

if (!$row = $result->fetch_assoc()) {
   
    header("location:ui.html");
}
else {
    header("location:main.php");
}


?>



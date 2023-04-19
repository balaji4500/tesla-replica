<?php

$firstname=$_POST['first'];
$lastname=$_POST['second'];
$password=$_POST['pass'];
$obj= new mysqli("localhost","root","","hello");
$str="INSERT INTO createaccount (firstname,lastname,password) values('$firstname','$lastname','$password')";
$obj->query($str);
$obj->close();
echo "<script> alert('values are saved')</script>"
?>
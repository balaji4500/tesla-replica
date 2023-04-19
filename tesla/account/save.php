<?php

$email=$_POST['email'];
$password=$_POST['pass'];
$con=new mysqli("localhost","root","","hello");
$sql="INSERT INTO customer(cus_email,cus_pass) values ('$email','$password')";
$con->query($sql);
$con->close();
echo "<script> alert('successfully sigin')</script>"

 


?>





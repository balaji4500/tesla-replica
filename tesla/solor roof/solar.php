<?php

$home=$_POST['address'];
$bill=$_POST['electric'];
$obj= new mysqli("localhost","root","","hello");
$str="INSERT INTO solarroof (homeaddress,electricitybill) values('$home','$bill')";
$obj->query($str);
$obj->close();
echo "values are saved"




?>
<?php
$con=new mysqli('localhost','root','','data_demo');
if($con->connect_error)
{
    die("connection failed".$con->connect_error);
}
?>

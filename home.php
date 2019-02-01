<?php


include('dbconnect.php');

$name=$_POST['user'];
$em=$_POST['email'];
$ph=$_POST['phone'];
$ps=$_POST['pass'];
$date=$_POST['date'];
$month=$_POST['month'];
$year=$_POST['year'];
$time=$_POST['time'];
$skill=$_POST['service'];
print_r($skill);
// $name=$_POST['']
$file_name=$_FILES['image']['name'];
$file_tmp_name=$_FILES['image']['tmp_name'];
$file_store="upload/".$file_name;
move_uploaded_file($file_tmp_name,$file_store);
$date_o=$year.'-'.$month.'-'.$date;
//print_r($date_o);

$sk=' ';
// $_SESSION['user']=$_POST['user'];
foreach($skill as $i)
{
    $sk.=$i.'-';
}

$q="INSERT INTO USER(name,email,phone,pass,skill,data_of,time_o,addres) VALUES('$name','$em',$ph,'$ps','$sk','$date_o','$time','$file_store')";
if($con->query($q))
{
    $_SESSION['user']=$_POST['user'];
    header('location:display.php');
    
}
else{
    die('connection failed'.$con.' '.$con->error);
}
?>

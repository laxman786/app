<?php
session_start();
if(!isset($_SESSION['user']))
{
    header('location:index.php');
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>display </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="" />
    <script src=""></script>
    <style>
    #lax{
        width:40px;
        height:50px;
    }
#customers {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #4CAF50;
  color: white;
}
</style>
</head>
<body>
<center>
 <table id='customers'>
 <caption><h2> All user Record</h2></caption>
 <tr>
 <th>name</th>
 <th>email</th>
 <th>pass</th>
 <th>skill</th>
 <th>date of birth</th>
 <th>time to meet</th>
 <th>phone number</th>
 <th>image</th>
 </tr>
<?php
include('dbconnect.php');
$q="SELECT name,email,phone,pass,skill,data_of,time_o,addres FROM USER";

if($r=$con->query($q))
{
    if($r->num_rows>0)
    {
        while($row=$r->fetch_assoc()){
    ?>
        <tr>
                <td><?php echo $row['name']?></td>
                <td><?php echo $row['email']?></td>

                <td><?php echo $row['pass']?></td>

                <td><?php echo $row['skill']?></td>

                <td><?php echo $row['data_of']?></td>

                <td><?php echo $row['time_o']?></td>
                <td><?php echo $row['phone']?></td>
             <td ><image id='lax' src='<?php echo $row['addres']?>'  alt='image not avaiable'/></td>
        </tr>
    <?php
        }
    }
    else{
        echo "data not found";
    }
   
}
?>
</table>
</center>
   
</body>
</html>
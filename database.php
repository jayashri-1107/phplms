<?php
$servername="localhost";
$username="root";
$password="";
$database="libary";
$con=mysqli_connect($servername,$username,$password,$database);
if(!$con)
{
  die("error ".mysqli_error($con));
}
else
{
echo "sucess............";
}
?>

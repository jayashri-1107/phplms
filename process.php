<?php
include 'database.php';
if(isset($_POST['submit']))
{
$name=$_POST['uname'];
$password=$POST['password'];
$gender=$_POST['gender'];
$education=$POST['education'];
$chk="";
foreach($education as $chk1)
{

$chk.=$chk1.",";
}

$sql="insert into student(name,password,gender,education)
values('$name','$password','$gender','$chk')";



if(mysqli_query($con,$sql))
{
echo "<script>alert('new record inserted')</script>";
}
else
{
echo "error:";
}
mysqli_close($con);
}


?>
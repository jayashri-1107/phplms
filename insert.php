<!DOCTYPE.html>
<html>
<head>

<meta.charset="ult-8">

</head>

<body>
<center>
<form method ="post" action="process.php">

<table border="3">
<tr><td>Name</td><td><input type="text" name="uname" placeholder="enter user name" required></td></tr>
<tr><td>Password</td><td><input type="password" name="password" placeholder="enter password" required></td></tr>
<tr><td>Gender</td></tr>
<tr><td>Male</td><td><input type="radio" name="gender" value="male"></td></tr>
<tr><td>Female</td><td><input type="radio" name="gender" value="female"></td></tr>
<tr><td>Education :</td></tr>
<tr><td><input type="checkbox" name="education[]" value="10th"><td>10th</td></td></tr>
<tr><td><input type="checkbox" name="education[]" value="12th"><td>12th</td></td></tr>
<tr><td><input type="checkbox" name="education[]" value="b.tech"><td>b.tech</td></td></tr>

<tr><td><input type="submit" name="submit" value="submit"></td></tr>
</table>


</form>


</center>
</body>

</html>
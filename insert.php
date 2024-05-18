<!DOCTYPE.html>
<html>
<head>

<meta.charset="ult-8">

</head>

<body>
<center>
<form method ="post" action="process.php">

<table border="2">
<tr><td>name</td><td><input type="text" name="uname" placeholder="enter user name" required></td></tr>
<tr><td>password</td><td><input type="password" name="password" placeholder="enter password" required></td></tr>
<tr><td>gender</td></tr>
<tr><td>male</td><td><input type="radio" name="gender" value="male"></td></tr>
<tr><td>female</td><td><input type="radio" name="gender" value="female"></td></tr>
<tr><td>education :</td></tr>
<tr><td><input type="checkbox" name="education[]" value="10th"><td>10th</td></td></tr>
<tr><td><input type="checkbox" name="education[]" value="12th"><td>12th</td></td></tr>
<tr><td><input type="checkbox" name="education[]" value="b.tech"><td>b.tech</td></td></tr>

<tr><td><input type="submit" name="submit" value="submit"></td></tr>
</table>


</form>


</center>
</body>

</html>
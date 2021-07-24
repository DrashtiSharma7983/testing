<?php

$Id=$_POST['id'];
?>


<html>

<head>
<title>Form1</title>
</head>

<body>
<center>
<h1 style=text-align:center>Form 1</h1>
<form name="main" action="form2.php" method="POST">
<table cellspacing=0 cellpadding=10>

<tr>
<td>Id</td>
<td><input type="text" placeholder="123456789" name="id" value="<?php echo $Id;?>"></td>
</tr>


<tr>
<td>Full Name:</td>
<td><input type="text" placeholder="Name" name="fullname" value=""></td>
</tr>

<td>User Name: </td>
<td><input type ="User Name" placeholder="User Name" name=""></td><tr>
</tr>

<tr><td>Email id:</td>
<td><input type="email" placeholder="abcd@gmail.com" name=""></td>
</tr>

<tr><td>Contact No:</td>
<td><input type="phone" placeholder="987*******" name=""></td>
</tr>

<tr><td>Password:</td>
<td><input type="password" placeholder="password" name=""></td>
</tr>

<tr><td>Re-type Password:</td>
<td><input type="password" placeholder="Re-type Password" name=""></td>
</tr>


<tr>
<td><input type="submit" name="submit" value="Submit"></td>
</tr>

</table>

</form>

</center>


</body>

</html>

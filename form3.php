<?php

$Id=$_POST['id'];
?>
<html>

<head>
<title>Form1</title>
</head>

<body>
<center>
<h1 style=text-align:center>Form 3</h1>
<form name="main" action="form4.php" method="POST">
<table cellspacing=0 cellpadding=10>

<tr>
<td>Id</td>
<td><input type="text" placeholder="123456789" name="id" value="<?php echo $Id ?>"></td>
</tr>


<tr>
<td>Address</td>
<td><input type="text" placeholder="address" name="address" value=""></td>
</tr>

<td>Pin code </td>
<td><input type ="text" placeholder="Pin code" name="Pin code"></td><tr>
</tr>

<tr><td>Street no</td>
<td><input type="text" placeholder="Street no" name="Street no"></td>
</tr>

<tr><td>Country</td>
<td><input type="text" placeholder="Country" name="Country"></td>
</tr>

<tr><td>State</td>
<td><input type="text" placeholder="State" name="State"></td>
</tr>



<tr>
<td><input type="submit" name="submit" value="Submit"></td>
</tr>

</table>

</form>

</center>


</body>

</html>

<?php

$Id=$_POST['id'];
?>
<html>

<head>
<title>Form1</title>
</head>

<body>
<center>
<h1 style=text-align:center>Form 2</h1>
<form name="main" action="form3.php" method="POST">
<table cellspacing=0 cellpadding=10>

<tr>
<td>Id</td>
<td><input type="text" placeholder="123456789" name="id" value="<?php echo $Id;?>"></td>
</tr>


<tr>
<td>College Name:</td>
<td><input type="text" placeholder=" college Name" name="college name" value=""></td>
</tr>

<td>College City </td>
<td><input type ="text" placeholder="College City" name="College City"></td><tr>
</tr>

<tr><td>Faculty</td>
<td><input type="text" placeholder="Faculty" name="Faculty"></td>
</tr>



<tr>
<td><input type="submit" name="submit" value="Submit"></td>
</tr>

</table>

</form>

</center>


</body>

</html>

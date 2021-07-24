<?php

$Id=$_POST['id'];
?>

<html>

<head>
<title>Form1</title>
</head>

<body>
<center>
<h1 style=text-align:center>Form4</h1>
<form name="main" action="" method="POST">
<table cellspacing=0 cellpadding=10>

<tr>
<td>Id</td>
<td><input type="text" placeholder="123456789" name="id" value="<?php echo $Id ?>"></td>
</tr>


<tr>
<td>Bank Name:</td>
<td><input type="text" placeholder="bank name" name="bank name" value=""></td>
</tr>

<tr>
<td>IFSC code:</td>
<td><input type="text" placeholder="IFSC code" name="IFSC code" value=""></td>
</tr>

<tr>
<td>Account no:</td>
<td><input type="text" placeholder="Account no" name="Account no" value=""></td>
</tr>

<tr>
<td>Bank city:</td>
<td><input type="text" placeholder="Bank city" name="Bank city" value=""></td>
</tr>

<tr>
<td><input type="submit" name="submit" value="Submit"></td>
</tr>

</table>

</form>

</center>


</body>

</html>
<center><?php

if(isset($_POST['submit']))
{
$id=$_POST['id'];
echo 'id-'.$id;



}


?></center>
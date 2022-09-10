<!doctype html>
<html>
<head> 

<title>Registration form</title>

</head>

<body>



<form method="get">
<table border="2">
<tr>
<th>Name :</th>
<td><input type="text" name="txtname" ></td>
</tr>

<tr>
<th>Father name :</th>
<td><input type="text" name="txtfn" ></td>
</tr>

<tr>
<th>Class :</th>
<td><input type="text" name="txtclass" ></td>
</tr>

<tr>
<th>Email :</th>
<td><input type="text" name="txtemail" ></td>
</tr>


<tr>
<th>phone number :</th>
<td><input type="text" name="txtnum" ></td>
</tr>

<tr>
<th>Address :</th>
<td><input type="text" name="txtadd" ></td>
</tr>


<tr>

<td><input type="submit" name="sb" ></td>
</tr>
</table>

</form>


<table border="2">
<tr>
<th>Name :</th>
<th>Father Name :</th>
<th>Class Name :</th>
<th>Email :</th>
<th>Phone Number :</th>
<th>Address :</th>
</tr>
<?php
	$name=$_GET['txtname'];
	$fname=$_GET['txtfn'];
	$class=$_GET['txtclass'];
	$email=$_GET['txtemail'];
	$num=$_GET['txtnum'];
	$add=$_GET['txtadd'];


?>
<tr>
<td><?php echo $name;?></td>
<td><?php echo $fname;?></td>
<td><?php echo $class;?></td>
<td><?php echo $email;?></td>
<td><?php echo $num;?></td>
<td><?php echo $add;?></td>
</tr>
</body>
</html>
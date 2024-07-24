<?php
$con=mysqli_connect("localhost","root","");
if($con){
    $db="create database if not exists feedback";
	mysqli_query($con,$db) or die(mysqli_error($con));
	mysqli_select_db($con,"feedback") or die(mysqli_error($con));
	$table="create table if not exists user(First Name varchar(25) primary key, Last Name varchar(100) not null, Email int not null, phone int ,comment varchar(7) not null)";
	mysqli_query($con,$table) or die(mysql_error($con));

    $name=$_POST['fname'];
	$Lastname=$_POST['ilname'];
	$Email=$_POST['uemail'];
    $phone=$_POST['uphone'];
	$coment=$_POST['comment'];
echo"
<script>
alert('Data is updated');
</script>
";
	

}
?>
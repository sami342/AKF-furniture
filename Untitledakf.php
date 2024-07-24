<?php
$con=mysqli_connect("localhost","root","");
if($con){
    $db="create database if not exists feedback";
	mysqli_query($con,$db) or die(mysqli_error($con));
	mysqli_select_db($con,"feedback") or die(mysqli_error($con));
	$table="create table if not exists user(fname varchar(25) primary key, Lname varchar(100) not null, eamil int not null, phon int ,comment varchar(7) not null)";
	mysqli_query($con,$table) or die(mysql_error($con));

    $name=$_POST['fname'];
	$Lastname=$_POST['ilname'];
	$Email=$_POST['uemail'];
    $phone=$_POST['uphone']
	$comment=$_POST['comment'];
echo"
<script>
alert('Data is updated');
</script>
";
	

}
?>
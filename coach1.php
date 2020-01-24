<?php
$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "footballclubsdb";
$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);



$coid = $_POST['coid'];
$coname=$_POST['coname'];
$age=$_POST['age'];
$coexp=$_POST['cexp'];
$cid=$_POST['cid'];
$date=$_POST['date'];
$submit=$_POST['option'];


if($submit=="Insert")
{
	$sql1 = "insert into coach(coach_id,name,age,experience,club_id,start_date) values('$coid','$coname','$age','$coexp','$cid','$date')";

if($conn->query($sql1))
{
echo "Record is inserted sucessfully";
}
}

if($submit=="Update")
{
	$sql2="update coach set name='$coname',age='$age',experience='$coexp',club_id='$cid',start_date='$date' where coach_id='$coid'";
if($conn->query($sql2))
{
	echo "Record updated successfully";
}
}

if($submit=="Delete")
{
	$sql3="delete from coach where coach_id='$coid'";

if($conn->query($sql3))
{
	echo "Record deleted successfully";
}
}



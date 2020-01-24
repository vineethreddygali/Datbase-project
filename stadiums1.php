<?php
$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "footballclubsdb";
$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);



$sid = $_POST['sid'];
$sname=$_POST['sname'];
$scap=$_POST['scap'];
$scity=$_POST['scity'];
$cid=$_POST['cid'];
$submit=$_POST['option'];


if($submit=="Insert")
{
	$sql1 = "insert into stadium(stadium_id,name,capacity,city,club_id) values('$sid','$sname','$scap','$scity','$cid')";

if($conn->query($sql1))
{
echo "Record is inserted sucessfully";
}
}

if($submit=="Update")
{
	$sql2="update stadium set name='$sname',capacity='$scap',city='$scity',club_id='$cid' where stadium_id='$sid'";
if($conn->query($sql2))
{
	echo "Record updated successfully";
}
}

if($submit=="Delete")
{
	$sql3="delete from stadium where stadium_id='$sid'";

if($conn->query($sql3))
{
	echo "Record deleted successfully";
}
}



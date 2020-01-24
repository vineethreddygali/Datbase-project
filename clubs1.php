<?php
$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "footballclubsdb";
$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);



$clubid = $_POST['cid'];
$clubname=$_POST['cname'];
$country=$_POST['country'];
$cleague=$_POST['cleague'];
$submit=$_POST['option'];


if($submit=="Insert")
{
	$sql1 = "insert into club(club_id,name,country,league) values('$clubid','$clubname','$country','$cleague')";

if($conn->query($sql1))
{
echo "Record is inserted sucessfully";
}
}

if($submit=="Update")
{
	$sql2="update club set name='$clubname',country='$country',league='$cleague' where club_id='$clubid'";
if($conn->query($sql2))
{
	echo "Record updated successfully";
}
}

if($submit=="Delete")
{
	$sql3="delete from club where club_id='$clubid'";

if($conn->query($sql3))
{
	echo "Record deleted successfully";
}
}



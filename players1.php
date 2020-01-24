<?php
$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "footballclubsdb";
$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);



$pid = $_POST['pid'];
$pname=$_POST['pname'];
$snum=$_POST['snum'];
$pos=$_POST['pos'];
$cid=$_POST['cid'];
$coid=$_POST['coid'];
$term=$_POST['term'];
$submit=$_POST['option'];


if($submit=="Insert")
{
	$sql1 = "insert into players(player_id,name,shirt_number,position,club_id,coach_id,term) values('$pid','$pname','$snum','$pos','$cid','$coid','$term')";

if($conn->query($sql1))
{
echo "Record is inserted sucessfully";
}
}

if($submit=="Update")
{
	$sql2="update players set name='$pname',shirt_number='$snum',position='$pos',club_id='$cid',coach_id='$coid',term='$term' where player_id='$pid'";
if($conn->query($sql2))
{
	echo "Record updated successfully";
}
}

if($submit=="Delete")
{
	$sql3="delete from players where player_id='$pid'";

if($conn->query($sql3))
{
	echo "Record deleted successfully";
}
}



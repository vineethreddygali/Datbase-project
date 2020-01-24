<html>
<head>
<title>STADIUM</title>
<h1><center/>STADIUM</h1>
</head>
<body>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "footballclubsdb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "select stadium_id,name,capacity,city,club_id from stadium";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<style>
table, th, td {
  border: 1px solid black;
}
</style><table><tr><th>ID</th><th>Name</th><th>capacity</th><th>city</th><th>Club_ID</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["stadium_id"]."</td><td>".$row["name"]."</td><td>".$row["capacity"]."</td><td>".$row["city"]."</td><td>".$row["club_id"]."</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}
$conn->close();
?>
<form method="POST" action="stadiums1.php">
Stadium_ID: <input type="number" name="sid"><br><br>
Stadium Name : <input type="text" name="sname"><br><br>
Capacity: <input type="number" name="scap"><br><br>
City: <input type="text" name="scity"><br><br>
Club_ID: <input type="number" name="cid"><br><br>
<input type="radio" name="option" value="Insert" checked>INSERT<br>
  <input type="radio" name="option" value="Update"> UPDATE<br>
  <input type="radio" name="option" value="Delete"> DELETE

<br/><button type="submit">SUBMIT</a></button>



</form>
</body>
</html>
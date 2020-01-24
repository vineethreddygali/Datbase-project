<html>
<head>
<title>CLUBS</title>
<h1><center/>CLUBS</h1>
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

$a="";
$sql = "select club_id,name,country,league from club";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<style>
table, th, td {
  border: 1px solid black;
}
</style><table><tr><th>ID</th><th>Name</th><th>Country</th><th>League</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["club_id"]."</td><td>".$row["name"]."</td><td>".$row["country"]."</td><td>".$row["league"]."</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}
$conn->close();
?>
<form method="POST" action="clubs1.php">
Club_ID: <input type="number" name="cid"><br><br>
Club Name : <input type="text" name="cname"><br><br>
Club Country: <input type="text" name="country"><br><br>
Club League: <input type="text" name="cleague"><br><br>
<input type="radio" name="option" value="Insert" checked>INSERT<br>
  <input type="radio" name="option" value="Update"> UPDATE<br>
  <input type="radio" name="option" value="Delete"> DELETE

<br/><button type="submit">SUBMIT</a></button>



</form>
</body>
</html>
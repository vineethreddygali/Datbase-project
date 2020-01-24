<html>
<head>
<title>PLAYERS</title>
<h1><center/>PLAYERS</h1>
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

$sql = "select player_id,name,shirt_number,position,club_id,coach_id,term from players";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<style>
table, th, td {
  border: 1px solid black;
}
</style><table><tr><th>ID</th><th>Name</th><th>Shirt Number</th><th>Position</th><th>Club_ID</th><th>Coach ID</th><th>Term</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["player_id"]."</td><td>".$row["name"]."</td><td>".$row["shirt_number"]."</td><td>".$row["position"]."</td><td>".$row["club_id"]."</td><td>".$row["coach_id"]."</td><td>".$row["term"]."</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}
$conn->close();
?>
<form method="POST" action="players1.php">
Player_ID: <input type="number" name="pid"><br><br>
Player Name : <input type="text" name="pname"><br><br>
Shirt Number: <input type="number" name="snum"><br><br>
Position: <input type="text" name="pos"><br><br>
Club_ID: <input type="number" name="cid"><br><br>
Coach_ID:<input type="number" name="coid"><br><br>
Term:<input type="number" name="term"><br><br>
<input type="radio" name="option" value="Insert" checked>INSERT<br>
  <input type="radio" name="option" value="Update"> UPDATE<br>
  <input type="radio" name="option" value="Delete"> DELETE

<br/><button type="submit">SUBMIT</a></button>



</form>
</body>
</html>
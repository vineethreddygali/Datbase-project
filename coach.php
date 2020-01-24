<html>
<head>
<title>COACH</title>
<h1><center/>COACH</h1>
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

$sql = "select coach_id,name,age,experience,club_id,start_date from coach";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<style>
table, th, td {
  border: 1px solid black;
}
</style><table><tr><th>ID</th><th>Name</th><th>Age</th><th>Experience</th><th>Club_ID</th><th>Start Date</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["coach_id"]."</td><td>".$row["name"]."</td><td>".$row["age"]."</td><td>".$row["experience"]."</td><td>".$row["club_id"]."</td><td>".$row["start_date"]."</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}
$conn->close();
?>
<form method="POST" action="coach1.php">
Coach_ID: <input type="number" name="coid"><br><br>
Coach Name : <input type="text" name="coname"><br><br>
Coach Age: <input type="number" name="age"><br><br>
Coach Experience: <input type="text" name="cexp"><br><br>
Club_ID: <input type="number" name="cid"><br><br>
Start Date:<input type="date" name="date"><br><br>
<input type="radio" name="option" value="Insert" checked>INSERT<br>
  <input type="radio" name="option" value="Update"> UPDATE<br>
  <input type="radio" name="option" value="Delete"> DELETE

<br/><button type="submit">SUBMIT</a></button>



</form>
</body>
</html>
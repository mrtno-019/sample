<!DOCTYPE html>
<html>
<body>
<style>
table, th, td {
    border: 1px solid black;
}
</style>
</head>

<?php
echo "Hello";

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "demodb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT messageId, messageName FROM messages";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table><tr><th>ID</th><th>Message</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["messageId"]. "</td><td>" . $row["messageName"]. "</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

$conn->close();
?>

</body>
</html>
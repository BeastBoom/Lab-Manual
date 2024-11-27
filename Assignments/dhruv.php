<?php

// Connecting to the Database
$servername = "localhost";
$username = "root";
$password = "";
$database = "dhruv";

// Create a connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// SQL query to retrieve data from the 'user' table
$sql = "SELECT `S.No`, `Name`, `Roll No.`, `Age` FROM user";
$result = $conn->query($sql);

// Check if there are results
if ($result->num_rows > 0) {
    // Output data of each row
    echo "<table border='1'><tr><th>S.No</th><th>Name</th><th>Roll No.</th><th>Age</th></tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["S.No"] . "</td><td>" . $row["Name"] . "</td><td>" . $row["Roll No."] . "</td><td>" . $row["Age"] . "</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

// Close the connection
$conn->close();
?>

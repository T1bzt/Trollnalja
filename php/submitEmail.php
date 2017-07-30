<?php
$servername = "mysql57.websupport.sk";
$user = "6ndn0upv ";
$password = "trollnalja2017";
$dbname = "subscribers";

// Create connection
$conn = mysqli_connect("mysql57.websupport.sk", "6ndn0upv", "$password", "6ndn0upv", 3311);
// Check connection

if (!$conn) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}

$asd = $_POST['fname'];
$asd2 = $_POST['lname'];
$sql = "INSERT INTO subscribers (FirstName , Mail, Datum)
VALUES ('$asd','$asd2', CURRENT_DATE );";
print $asd . " and " . $asd2;
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
<?php
// Change these variables to match your MySQL server settings
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "email";

// Create connection
$conn = new mysqli('localhost','root','','email');

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email']; // Assuming the form field is named 'email'

    // Prepare SQL statement to insert data into the database
    $sql = "INSERT INTO email (email) VALUES ('$email')";

    if ($conn->query($sql) === TRUE) {
        $response = "Your email has been submitted successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
echo $response;
?>

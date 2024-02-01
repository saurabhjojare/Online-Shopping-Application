<?php
// Database configuration
$servername = "localhost";
$username = "root";
$password = "Saurabh@148";
$database = "esite";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve and sanitize form data
$firstname = mysqli_real_escape_string($conn, $_POST['firstname']);
$lastname = mysqli_real_escape_string($conn, $_POST['lastname']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$phone = mysqli_real_escape_string($conn, $_POST['phone']);
$password = mysqli_real_escape_string($conn, $_POST['password']);

// Perform data validation (example: checking if required fields are not empty)
if (empty($firstname) || empty($lastname) || empty($email) || empty($phone) || empty($password)) {
    die("All fields are required");
}

// Insert data into the database (using prepared statement to prevent SQL injection)
$sql = "INSERT INTO users (firstname, lastname, email, phone, password) VALUES (?, ?, ?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("sssss", $firstname, $lastname, $email, $phone, $password_hash);

// Hash the password for security
$password_hash = password_hash($password, PASSWORD_DEFAULT);

if ($stmt->execute()) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close statement and connection
$stmt->close();
$conn->close();
?>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') { // Added single quotes around 'REQUEST_METHOD'

    // Database configuration
    $servername = 'localhost'; // Added single quotes around 'localhost'
    $username = 'root'; // Added single quotes around MySQL username
    $password = 'Saurabh@148'; // Added single quotes around MySQL password
    $database = 'esite'; // Added single quotes around MySQL database name

    // Create connection
    $conn = new mysqli($servername, $username, $password, $database);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error); // Corrected the concatenation operator
    }

    // Sanitize input to prevent SQL injection (not covered here)
    $username = $conn->real_escape_string($_POST['username']); // Used object-oriented style for real_escape_string
    $password = $conn->real_escape_string($_POST['password']); // Used object-oriented style for real_escape_string

    // Query to check if user exists and password is correct
    $sql = "SELECT * FROM login WHERE username = '$username' AND password = '$password'"; // Added missing * in SELECT
    $result = $conn->query($sql);

    if ($result->num_rows == 1) { // Corrected object reference for num_rows
        // User authenticated successfully
        echo "Login successful!";
    } else {
        // Invalid credentials
        echo "Invalid username or password";
    }

    // Close connection
    $conn->close(); // Corrected object reference for close
}
?>

<?php
// Replace these credentials with your actual MySQL credentials
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "signup";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $pass = $_POST['password'];

    // Check if user exists
    $sql = "SELECT * FROM signup_process WHERE email='$email' AND password='$pass'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        echo "Login successful";
        // Redirect to a new page or perform necessary actions upon successful login
    } else {
        echo "Login failed. Invalid email or password.";
    }
}

$conn->close();
?>

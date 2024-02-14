<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve username and password from the form
    $username = $_POST["username"];
    $password = $_POST["password"];
    
    // Dummy username and password for demonstration
    $valid_username = "user123";
    $valid_password = "password123";
    
    // Check if the provided username and password match the valid credentials
    if ($username === $valid_username && $password === $valid_password) {
        // Redirect to the home page or any other page after successful login
        header("Location: home.php");
        exit();
    } else {
        // If credentials are invalid, display an error message
        echo "<script>alert('Invalid username or password');</script>";
    }
}
?>

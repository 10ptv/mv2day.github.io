<?php
session_start();

// Database credentials
$servername = "localhost"; // Change this to your database server hostname
$username = "id21884745_me"; // Change this to your database username
$password = "Rithylove71#"; // Change this to your database password
$dbname = "id21884745_me"; 
try {
    // Create connection
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    
    // Set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    // Check if form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Retrieve username and password from form
        $username = $_POST['username'];
        $password = $_POST['password'];
        
        // SQL query to check if the username and password exist in the database
        $stmt = $conn->prepare("SELECT * FROM `login` WHERE username=:username AND password=:password");
        $stmt->bindParam(':username', $username);
        $stmt->bindParam(':password', $password);
        $stmt->execute();
        
        // If user exists, redirect to a welcome page
        if ($stmt->rowCount() == 1) {
            $_SESSION['username'] = $username;
            header("location: welcome.php");
        } else {
            // If user doesn't exist, show error message
            echo "Invalid username or password";
        }
    }
} catch(PDOException $e) {
    // Print connection error message
    echo "Connection failed: " . $e->getMessage();
}
?>

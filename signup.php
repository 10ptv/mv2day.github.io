<?php
// Database credentials
$servername = "localhost"; // Change this to your database server hostname
$username = "mv2day"; // Change this to your database username
$password = "Rithylove71#"; // Change this to your database password
$dbname = "id21884745_me"; // Change this to your database name

try {
    // Create connection
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    
    // Set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    // Check if form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Retrieve form data
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        
        // SQL query to insert user data into the database
        $stmt = $conn->prepare("INSERT INTO users (username, email, password) VALUES (:username, :email, :password)");
        $stmt->bindParam(':username', $username);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':password', $password);
        $stmt->execute();
        
        echo "User registered successfully";
    }
} catch(PDOException $e) {
    // Print connection error message
    echo "Connection failed: " . $e->getMessage();
}
?>

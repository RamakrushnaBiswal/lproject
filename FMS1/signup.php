<?php
include_once('db_connection.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get user input
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Hash the password for security

    // Insert user data into the database
    $sql = "INSERT INTO users (name, email, password) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sss", $name, $email, $password);

    if ($stmt->execute()) {
        // Registration successful, redirect to a success page or login page
        header("Location: login.html");
        exit();
    } else {
        // Handle database error
        echo "Error: " . $conn->error;
    }

    // Close the database connection
    $stmt->close();
    $conn->close();
}
?>
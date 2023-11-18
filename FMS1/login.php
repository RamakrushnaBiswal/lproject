<?php
session_start(); // Start a PHP session

include_once('db_connection.php'); 

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Query the database to retrieve user data by email
    $sql = "SELECT * FROM users WHERE email = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();
    
    if ($result->num_rows === 1) {
        $row = $result->fetch_assoc();
        if (password_verify($password, $row['password'])) {
            // Password is correct, log in the user
            $_SESSION['user_id'] = $row['id'];
            header("Location: HOME.php"); // Redirect to a dashboard or profile page
            exit();
        } else {
            // Incorrect password
            $_SESSION['error'] = "Incorrect password";
        }
    } else {
        // User not found
        $_SESSION['error'] = "User not found";
    }

    $stmt->close();
}

// Close the database connection
$conn->close();

header("Location: login.php"); // Redirect back to the login page
exit();
?>
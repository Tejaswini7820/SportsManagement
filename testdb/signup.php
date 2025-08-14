<?php
include 'connect.php';

// Get POST data
$fullname = $_POST['fullname'];
$email = $_POST['email'];
$pass = $_POST['password'];

// Hash the password for security
// $hashed_password = password_hash($pass, PASSWORD_DEFAULT);

// Prepare and bind
$stmt = $conn->prepare("INSERT INTO users (fullname, email, password) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $fullname, $email, $pass);

if ($stmt->execute()) {
    echo "<script>alert('Registration successful!'); window.location.href='loginpage.html';</script>";
} else {
    echo "<script>alert('Error: " . $stmt->error . "'); window.history.back();</script>";
}

$stmt->close();
$conn->close();
?>
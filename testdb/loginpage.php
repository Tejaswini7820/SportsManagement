<?php
include 'connect.php';
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user_input = $_POST['user_input']; // Can be username or email
    $pass = $_POST['password'];

    // Fetch user by username or email
    $stmt = $conn->prepare("SELECT id, fullname, password FROM users WHERE email = ? OR username = ?");
    $stmt->bind_param("ss", $user_input, $user_input);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows == 1) {
        $stmt->bind_result($id, $fullname, $db_pass);
        $stmt->fetch();

        // If you store hashed passwords, use password_verify($pass, $db_pass)
        if ($pass === $db_pass) { // Change to password_verify($pass, $db_pass) if using hashes
            $_SESSION['user_id'] = $id;
            $_SESSION['fullname'] = $fullname;
            header("Location: indexpage.php");
            exit();
        } else {
            echo "<script>alert('Invalid password'); window.history.back();</script>";
        }
    } else {
        echo "<script>alert('User not found'); window.history.back();</script>";
    }
    $stmt->close();
}
$conn->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Login UI</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
<style>
    body {
        margin: 0;
        padding: 0;
        font-family: 'Orbitron', monospace;
        height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
        color: #e0e2e3;
        overflow: hidden;
        text-align:center;
    }
    .back-vid {
        position: fixed;
        right: 0;
        bottom: 0;
        min-width: 100%;
        min-height: 100%;
        z-index: -1;
        object-fit: cover;
    }
    .face-img {
        width: 200px;
        margin-bottom: 20px;
    }
    .input-box {
        width: 80%;
        padding: 12px;
        margin: 10px 0;
        border: 1px solid #00bfff;
        border-radius: 8px;
        background: transparent;
        color: #e4e9ea;
        box-sizing: border-box;
        font-size: 16px;
        outline: none;
        transition: all 0.4s ease;
    }
    .input-box:hover,
    .input-box:focus {
        border-color: #0991f3;
        box-shadow: 0 0 12px #0991f3;
        transform: scale(1.02);
        background: rgba(0, 255, 255, 0.05);
    }
    .forgot {
        display: block;
        margin: 8px 0;
        font-size: 14px;
        color: #00bfff;
        text-decoration: none;
        font-family: 'Orbitron', monospace;
        transition: color 0.3s ease, text-shadow 0.3s ease;
    }
    .forgot:hover {
        color: #ffffff;
        text-shadow: 0 0 5px #0991f3;;
    }
    .btn {
        width: 80%;
        padding: 12px;
        margin-top: 10px;
        border: none;
        background: #00BFFF;
        color: #ffffff;
        font-size: 18px;
        cursor: pointer;
        transition: all 0.3s ease;
        font-family: 'Orbitron', monospace;
        font-weight: bold;
        border-radius: 20px;
    }
    .btn:hover {
        background: #0991f3;
        box-shadow: 0 0 15px #00bfff;
        transform: scale(1.05);
    }
    .google-btn {
        margin-top: 10px;
        background: white;
        color: #000;
        font-weight: bold;
        font-family: 'Orbitron', monospace;
        transition: all 0.3s ease;
    }
    .google-btn:hover {
        background: #e8e8e8;
        box-shadow: 0 0 12px #ffffff;
        transform: scale(1.05);
    }
    @keyframes fadeIn {
        from {
            opacity: 0;
            transform: translateY(20px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }
</style>
</head>
<body>

<video class="back-vid" autoplay loop muted playsinline src="videos/galaxy.mp4"></video>

<div class="container">
    <h1>Login</h1>
    <form method="POST" action="">
        <input type="text" class="input-box" name="user_input" placeholder="Username or Email" required>
        <input type="password" class="input-box" name="password" placeholder="Password" required>
        <button class="btn" type="submit">Submit</button>
    </form>
    <a href="signup.html">
        <button class="btn" style="margin-top:20px;">Sign up</button><br><br>
    </a>
    <button class="btn google-btn">
        <i class="bi bi-google"></i>
        Continue with Google
    </button><br><br>
    <a href="#" class="forgot">Forgot password?</a>
    <br>
    <a href="logout.php" class="forgot">Logout</a>
</div>

</body>
</html>
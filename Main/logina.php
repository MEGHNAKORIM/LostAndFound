<?php
session_start();

$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'user-registration';

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die('Connection failed: ' . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE username='$username'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        if (password_verify($password, $row['password'])) {
            $_SESSION['loggedin'] = true;
            $_SESSION['username'] = $username;
            $_SESSION['type'] = $row['type'];
            header('Location: index.php'); // Updated location
            exit; // Stop further execution
        } else {
            echo 'Invalid password';
        }
    } else {
        echo 'User not found';
    }
}

$conn->close();
?>

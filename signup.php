<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "onways";

$conn = mysqli_connect($host, $username, $password, $database);

if (!$conn) {
    die("Connection Failed: " . mysqli_connect_error());
}

$email = $_REQUEST['email'];
$username = $_REQUEST['username'];
$password = $_REQUEST['password'];

$sql = "INSERT INTO member (email, username, password) VALUES ('$email', '$username', '$password')";

if (mysqli_query($conn, $sql)) {
    ob_end_flush();
    echo "<script>
        alert('Signup Successful!');
        window.location.href = 'signup.html';
        </script>";
} else {
    ob_end_flush();
    echo "<script>
        alert('Oops! Signup Failed');
        window.location.href = 'signup.html';
        </script>";
}
?>
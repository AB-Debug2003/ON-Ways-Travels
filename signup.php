<?php
require_once "config.php";

$email = $_REQUEST['email'];
$username = $_REQUEST['username'];
$password = $_REQUEST['password'];

$sql = "INSERT INTO member (email, username, password) VALUES ('$email', '$username', '$password')";

$sql2 = "SELECT * FROM member WHERE username = '$username' OR password = '$password'";
$result = mysqli_query($conn, $sql2);

if (mysqli_num_rows($result) == 1) {
    echo "<script>
            alert('User Already Exists!');
            window.location.href = 'login.html';
            </script>";	  
}

else {
    mysqli_query($conn, $sql);
	echo "<script>
        alert('Signup Successful!');
        window.location.href = 'signup.html';
        </script>";
}
?>
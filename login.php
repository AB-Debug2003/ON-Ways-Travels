<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "onways";

$conn = mysqli_connect($host, $username, $password, $database);

if (!$conn) {
    die("Connection Failed: " . mysqli_connect_error());
}

$username = $_REQUEST['username'];
$password = $_REQUEST['password'];

$sql = "SELECT * FROM member WHERE username = '$username' AND password = '$password'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) == 1) {
	echo "<script>
			alert('Login Successful!');
            window.location.href = 'home.html';
			</script>";	  
} 
else {
	echo "<script>
			alert('Login Failed. Please check your credentials.');
            window.location.href = 'login.html';
			</script>";
}
?>
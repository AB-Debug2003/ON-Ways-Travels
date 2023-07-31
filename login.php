<?php
require_once "config.php";

$username = $_REQUEST['username'];
$password = $_REQUEST['password'];

$sql = "SELECT * FROM member WHERE username = '$username' AND password = '$password'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) == 1) {
	echo "<script>
			alert('Login Successful!');
            window.location.href = 'index.html';
			</script>";	  
} 
else {
	echo "<script>
			alert('Login Failed. Please check your credentials.');
            window.location.href = 'login.html';
			</script>";
}
?>
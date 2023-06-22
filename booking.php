<?php
require_once "config.php";
$name = $_REQUEST['name'];
$email = $_REQUEST['email'];
$package = $_REQUEST['package'];
$country = $_REQUEST['country'];
$adult = $_REQUEST['adult'];
$child = $_REQUEST['child'];
$depDate = $_REQUEST['depDate'];
$retDate = $_REQUEST['retDate'];
$travelClass = $_REQUEST['travelClass'];


$sql = "INSERT INTO booking (name, email, package, country, adults, children, DepDate, RetDate, TravelClass) VALUES ('$name', '$email', '$package', '$country', '$adult', '$child', '$depDate', '$retDate', '$travelClass')";

if (!mysqli_query($conn, $sql)) {
    echo "<script>
                alert('Booking Failed!');
                window.location.href = 'booking.html';
                </script>";
    echo mysqli_connect_error();
} 

else {
    echo "<script>
            alert('Booking Confirmed!');
            window.location.href = 'booking.html';
            </script>";
}
?>
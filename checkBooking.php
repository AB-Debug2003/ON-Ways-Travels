<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Book Now - Onways Travels</title>
    <link href="media/favicon.png" rel="icon">
    <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=PT+Sans:400" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
    <style>
        body{
            background-color: #1e1e1e;
        }
        thead tr td {
            color: #1bbd36;
            padding: 10px;
            font-size: 20px;
        }

        tr {
            color: white;
        }

        tbody tr td {
            padding: 8px;
        }
    </style>
</head>

<body>

    <header id="header" class="fixed-top">
        <div class="container d-flex align-items-center">

            <h1 class="logo me-auto"><a href="home.html"><span>OnWays</span> Travels</a></h1>

            <nav id="navbar" class="navbar order-last order-lg-0">
                <ul>
                    <li><a href="home.html">Home</a></li>
                    <li><a href="about.html">About Us</a></li>

                    <li class="dropdown"><a href="packages.html"><span>Services</span>
                            <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="packages.html">Packages</a></li>
                            <li><a href="insurance.html">Travel Insurance</a></li>
                        </ul>
                    </li>

                    <li class="dropdown"><a href="booking.html"><span>Booking</span> <i
                                class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="booking.html" class="active">Book Now</a></li>
                            <li><a href="checkBooking.html">Check Booking</a></li>
                        </ul>
                    </li>

                    <li><a href="contact.html">Contact</a></li>
                    <li class="dropdown"><a href="login.html"><span>Member</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="login.html">Login</a></li>
                            <li><a href="signup.html">Sign Up</a></li>
                        </ul>
                    </li>
                </ul>

                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav>

            <div class="header-social-links d-flex">
                <a href="#" class="twitter"><i class="bu bi-twitter"></i></a>
                <a href="#" class="facebook"><i class="bu bi-facebook"></i></a>
                <a href="#" class="instagram"><i class="bu bi-instagram"></i></a>
                <a href="#" class="linkedin"><i class="bu bi-linkedin"></i></i></a>
            </div>

        </div>
    </header>

    <main id="main">
        <section id="about-us">
            <?php
            require_once "config.php";
            $name = $_REQUEST['name'];
            $email = $_REQUEST['email'];
            $query = "SELECT * FROM booking WHERE Name = '$name' AND Email = '$email'";
            $result = mysqli_query($conn, $query);
            if (mysqli_num_rows($result) > 0) {
                ?>
                <div class="container table-responsive">
                    <table class="table-striped table-bordered table-hover text-black">
                        <thead>
                            <tr class="text-center">
                                <td>ID</td>
                                <td>Name</td>
                                <td>Email</td>
                                <td>Travel Package</td>
                                <td>Your Country</td>
                                <td>Adults</td>
                                <td>Childrens</td>
                                <td>Departure Date</td>
                                <td>Return Date</td>
                                <td>Travel Class</td>
                            </tr>
                        </thead>
                        <?php
                        $i = 0;
                        while ($row = mysqli_fetch_array($result)) {
                            ?>

                            <tbody class="text-center">
                                <tr>
                                    <td>
                                        <?php echo $row["ID"]; ?>
                                    </td>
                                    <td>
                                        <?php echo $row["Name"]; ?>
                                    </td>

                                    <td>
                                        <?php echo $row["Email"]; ?>
                                    </td>
                                    <td>
                                        <?php echo $row["Package"]; ?>
                                    </td>
                                    <td>
                                        <?php echo $row["Country"]; ?>
                                    </td>
                                    <td>
                                        <?php echo $row["Adults"]; ?>
                                    </td>
                                    <td>
                                        <?php echo $row["Children"]; ?>
                                    </td>
                                    <td>
                                        <?php echo $row["DepDate"]; ?>
                                    </td>
                                    <td>
                                        <?php echo $row["RetDate"]; ?>
                                    </td>

                                    <td>
                                        <?php echo $row["TravelClass"]; ?>
                                    </td>
                                </tr>
                            </tbody>
                            <?php
                            $i++;
                        }
                        ?>
                    </table>
                    <?php
            } else {
                echo "<script>
                    alert('No Booking Record Found!')
                    window.location.href = 'booking.html';
                 </script>";
            }
            ?>
            </div>
        </section>
    </main>

    <footer id="footer">
        <div class="footer-top">
            <div class="container">
                <div class="row">

                    <div class="col-lg-3 col-md-6 footer-contact">
                        <h3><span><strong>Onways</strong></span> Travels</h3>
                        <p>
                            63-H DHA Phase 6 <br>
                            Lahore<br>
                            Pakistan <br><br>
                            <strong>Phone:</strong> +92 0900 786 01 <br>
                            <strong>Email:</strong> onways.travel@tours.com<br>
                        </p>
                    </div>

                    <div class="col-lg-2 col-md-6 footer-links">
                        <h4>Useful Links</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="home.html">Home</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="about.html">About us</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="packages.html">Services</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="privacy.html">Privacy policy</a>
                            </li>
                        </ul>
                    </div>

                    <div class="col-lg-4 col-md-6 footer-newsletter">
                        <h4>Join Our Newsletter</h4>
                        <form>
                            <input type="email" name="email"><input type="submit" value="Subscribe">
                        </form>
                    </div>

                </div>
            </div>
        </div>

        <div class="container d-md-flex py-4">

            <div class="me-md-auto text-center text-md-start">
                <div class="copyright">
                    &copy; Copyright <strong><span>Onways Travels</span></strong>. All Rights Reserved
                </div>
                <div class="social-links text-center text-md-right pt-3 pt-md-0">
                    <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                    <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                    <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                    <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                </div>
            </div>
    </footer>

    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/main.js"></script>
</body>

</html>
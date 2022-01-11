<!DOCTYPE html>
<html>

<head>

    <title>Sign Up Justice Member</title>

    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="Bootstrap/bootstrap.min.css">

    <!-- Fontawsome CSS-->
    <link rel="stylesheet" href="fontawesome-free-5.15.4-web/css/all.min.css">

    <!--Google Fonts Import-->
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@300&family=Ubuntu:wght@500&display=swap');
    </style>

    <!--CSS Link-->
    <link rel="stylesheet" href="CSS/signup.css">

    <link rel="stylesheet" href="CSS/Main_home.css">

</head>

<body style="background-image: linear-gradient(rgba(0,0,0,0.5) , rgba(0,0,0,0.5)), url(pics/main/header-main1.jfif ); background-size: cover; background-repeat: no-repeat;">
    <!-- Start of header-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-black d-flex ">
        <div class="container-fluid position-relative">
            <a class="navbar-brand" href="Main_Home.html"><img src="pics/main/logo-1.png" alt="Logo" class="logo">
                <img src="pics/main/slogan.jpg" alt="slogan" class="slogan"></a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class=" position-absolute top-0 end-0" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                    <a class="nav-link lang" href="#"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                            <path fill-rule="evenodd" d="M12 1C5.925 1 1 5.925 1 12s4.925 11 11 11 11-4.925 11-11S18.075 1 12 1zM2.513 11.5h4.745c.1-3.037 1.1-5.49 2.093-7.204.39-.672.78-1.233 
                        1.119-1.673C6.11 3.329 2.746 7 2.513 11.5zm4.77 1.5H2.552a9.505 9.505 0 007.918 8.377 15.698 15.698 0 01-1.119-1.673C8.413 18.085 7.47 15.807 
                        7.283 13zm1.504 0h6.426c-.183 2.48-1.02 4.5-1.862 5.951-.476.82-.95 1.455-1.304 1.88L12 20.89l-.047-.057a13.888 13.888 0 01-1.304-1.88C9.807 17.5 
                        8.969 15.478 8.787 13zm6.454-1.5H8.759c.1-2.708.992-4.904 1.89-6.451.476-.82.95-1.455 1.304-1.88L12 3.11l.047.057c.353.426.828 1.06 1.304 1.88.898 
                        1.548 1.79 3.744 1.89 6.452zm1.476 1.5c-.186 2.807-1.13 5.085-2.068 6.704-.39.672-.78 1.233-1.118 1.673A9.505 9.505 0 0021.447 13h-4.731zm4.77-1.5h-4.745c-.1
                        -3.037-1.1-5.49-2.093-7.204-.39-.672-.78-1.233-1.119-1.673 4.36.706 7.724 4.377 7.957 8.877z">
                            </path>
                        </svg></a>
                    <!--Search Bar-->
                    <div class="container h-100">
                        <div class="d-flex justify-content-center h-100">
                            <div class="searchbar">
                                <input class="search_input" type="text" name="" placeholder="Search...">
                                <a href="#" class="search_icon"><i class="fas fa-search"></i></a>
                            </div>
                        </div>
                    </div>
                    <!--Search Bar End-->
                    <a class="vision" href="..."><img src="pics/main/vision.jpg"></a>
            </div>

            <!--Start of 2nd navBar-->
            <div class="collapse navbar-collapse position-absolute top-100 start-50 translate-middle" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link bottom" aria-current="page" href="Main_Home.html">Home</a>
                    <a class="nav-link bottom" href="news_page.html">News</a>
                    <a class="nav-link bottom" href="pics/Egypt_2014.pdf" target="_blank">Constitution law</a>
                    <a class="nav-link bottom" href="#">Court Locations</a>
                    <ul class="nav nav-pills bottom">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle bottom" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">About</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item bottom" href="#">About the Ministry</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item bottom" href="#">The Minister's Word</a></li>
                            </ul>
                        </li>
                    </ul>
                    <a class="nav-link bottom" href="contact-us.html">Contact</a>
                </div>
            </div>


            <!-----------------------start signin/signup anchor----------------------->
            <div class="div-signin-signup">
                <a href="redirect php/Choose-sign-in.html" class="btn btn-light">Sign in</a>
                <a href="redirect php/Choose-sign-up.html" class="btn btn-light">Sign Up</a>
            </div>
            <!-----------------------end signin/signup anchor----------------------->

    </nav>
    <!--Nav header ends-->


    <!-- LAWYER FORM STARTS -->

    <div class="container signup">
        <div class="title">Justice Member Registration</div>
        <div class="content">
            <form action="sign-up-justice.php" method="post">
                <div class="user-details">
                    <div class="input-box">
                        <span class="details">First Name</span>
                        <input type="text" name="First_Name" placeholder="Enter your first name" required>
                    </div>

                    <div class="input-box">
                        <span class="details">Last Name</span>
                        <input type="text" name="Last_Name" placeholder="Enter your last name" required>
                    </div>

                    <div class="input-box">
                        <span class="details">Identification Number</span>
                        <input type="text" name="Member_ID" placeholder="Enter your ID" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Email</span>
                        <input type="text" name="Email" placeholder="Enter your email" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Phone Number</span>
                        <input type="text" name="Phone_no" placeholder="Enter your number" required>
                    </div>
                    <div class="input-box">
                        <span class="details"> Justice Member Type</span>
                        <input type="text" name="Type" placeholder="Member Title" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Password</span>
                        <input type="password" name="Password" placeholder="Enter your password" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Confirm Password</span>
                        <input type="password" name="rePassword" placeholder="Confirm your password" required>
                    </div>
                </div>

                <div class="gender-details">
                    <input type="radio" name="Gender" value="Male" id="dot-1">
                    <input type="radio" name="Gender" value="Female" id="dot-2">
                    <span class="gender-title">Gender</span>
                    <div class="category">
                        <label for="dot-1">
                            <span class="dot one"></span>
                            <span class="gender">Male</span>
                        </label>
                        <label for="dot-2">
                            <span class="dot two"></span>
                            <span class="gender">Female</span>
                        </label>
                    </div>
                </div>

                <div class="button">
                    <input type="submit" value="Register">
                </div>
            </form>
        </div>
        <div style="display: none;">
            <?php
            $First_Name = $_REQUEST["First_Name"];
            $Last_Name = $_REQUEST["Last_Name"];
            $Member_ID = $_REQUEST["Member_ID"];
            $Email_J = $_REQUEST["Email"];
            $Phone_no_J = $_REQUEST["Phone_no"];
            $Type_J = $_REQUEST["Type"];
            $Password_J = $_REQUEST["Password"];
            $rePassword_J = $_REQUEST["rePassword"];
            $Gender_J = $_REQUEST["Gender"];


            $connect = mysqli_connect("localhost", "root", "", "e-law system");


            ?>
        </div>

        <div style="color: transparent;">

            <?php

            $x = 1;

            if (strlen($Member_ID) != 14) {
                echo "<b style=color:whitesmoke; text-align:center;> Please enter your ID consisting of 14 digits </b> <br>";
                $x = 0;
            } elseif (!filter_var($Email_J, FILTER_VALIDATE_EMAIL)) {
                echo "<b style=color:whitesmoke; text-align:center;> Please enter your Email </b> <br>";
                $x = 0;
            } elseif (!((strlen($Password_J) >= 4) && (strlen($Password_J) <= 10))) {
                echo "<b style=color:whitesmoke; text-align:center;> Please enter your a password not less than 4 digits or not grater than 10 digits </b> <br>";
                $x = 0;
            } elseif ($Password_J != $rePassword_J) {
                echo "<b style=color:whitesmoke; text-align:center;> Passwords don't match </b> <br>";
                $x = 0;
            } elseif ($x == 1) {

                $statement = "insert into `justice_member`
                (`Member_ID` , `Password` , `First_Name` ,  `Last_Name` ,   `Phone_no` ,  `Email` , `Type` , `Gender`) values
                ('$Member_ID' , '$Password_J' , '$First_Name' , '$Last_Name' , '$Phone_no_J' , '$Email_J' , '$Type_J' , '$Gender_J')";

                $result = mysqli_query($connect, $statement);

                if ($connect == true) {
                    echo "<b style=color:whitesmoke; text-align:center; >Successfully Connected.</b> <br>";
                } elseif ($connect == false) {
                    echo "<b style=color:whitesmoke; text-align:center;>Unable to connect!</b> <br>";
                }

                if ($result == true) {
                    echo "<b style=color:whitesmoke; text-align:center; >Member was added Successfully! You can sign in now </b> <br>";
                } elseif ($result == false) {
                    echo "<b style=color:whitesmoke; text-align:center; >Failed to add Member! Please contact us for help </b><br>";
                }
            }
            ?>
        </div>


    </div>


</body>

</html>
    <?php

    $username = $_POST["username"];
    $password = $_POST["pass"];
    $conn = mysqli_connect("127.0.0.1", "root", "", "e-law system");

    $statement = "SELECT* FROM `admin` WHERE `Admin_ID`='$username' AND `Password`='$password'";
    $result = mysqli_query($conn, $statement);

    if ((is_null($username)) && (is_null($password))) {
        echo " ";
    } else {
        if (($row = mysqli_fetch_array($result))) {
            header('Location: /Graduation_Project_2/Portals/admindash.html');
        } else {
            header('Location: /Graduation_Project_2/redirect php/admin-sign-in-error.html');
        };
    }; ?>
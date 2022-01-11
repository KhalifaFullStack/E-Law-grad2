    <?php

    $username = $_POST["username"];
    $password = $_POST["pass"];
    $conn = mysqli_connect("127.0.0.1", "root", "", "e-law system");

    $statement = "SELECT* FROM `justice_member` WHERE `Member_ID`='$username' AND `Password`='$password'";
    $result = mysqli_query($conn, $statement);

    if ((is_null($username)) && (is_null($password))) {
        echo " ";
    } else {
        if (($row = mysqli_fetch_array($result))) {
            header('Location: /Graduation_Project_2/Portals/judgedash.html');
        } else {
            header('Location: /Graduation_Project_2/redirect php/justice-sign-in-error.html');
        };
    }; ?>
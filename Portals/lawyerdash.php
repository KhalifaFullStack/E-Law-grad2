<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
  <title>Lawyer Portal</title>
  <link rel="stylesheet" href="../fontawesome-free-5.15.4-web/css/all.min.css">
  <link rel="stylesheet" href="lawyerdash.css">
</head>

<body>
  <!--left bar start-->
  <input type="checkbox" id="sidebar_toggle">
  <div class="sidebar">
    <div class="sidebar_header">
      <h3 class="brand">
        <span>Lawyer Portal</span>
      </h3>
      <label for="sidebar_toggle"><i class="fa fa-bars nav_btn"></i></label>
    </div>

    <ul class="sidebar_menu">
      <li>
        <a href="#" class="active">
          <i class="fas fa-desktop"></i>
          <span class="links_name">Dashboard</span>
        </a>
      </li>
      <li>
        <a href="lawyerclaim.html">
          <i class="far fa-file-alt"></i>
          <span class="links_name">Claim</span>
        </a>
      </li>
      <li>
        <a href="lawyerdefend.html">
          <i class="fas fa-shield-alt"></i>
          <span class="links_name">Defend</span>
        </a>
      </li>
      <li>
        <a href="payment.html">
          <i class="far fa-credit-card"></i>
          <span class="links_name">Make Payment</span>
        </a>
      </li>
      <li>
        <a href="#">
          <i class="fab fa-rocketchat"></i>
          <span class="links_name">Requests</span>
        </a>
      </li>
      <li>
        <a href="settings.html">
          <i class="fas fa-cog"></i>
          <span class="links_name">Settings</span>
        </a>
      </li>
      <li class="log_out">
        <a href="#">
          <i class="fas fa-sign-out-alt"></i>
          <span class="links_name">Log out</span>
        </a>
      </li>
    </ul>
  </div>
  <!--left bar end-->

  <!--nav bar start-->

  <div class="main_content">

    <header>
      <div class="search_wrapper">
        <i class="fas fa-search"></i>
        <input type="search" placeholder="Search">
      </div>

      <div class="social_icons">
        <a href="../Main_Home.html"><i class="fas fa-power-off"></i></a>
        <a href="#"><i class="fas fa-bell"></i></a>
        <div></div><?php
                    $connect = mysqli_connect("localhost", "root", "", "e-law system");
                    $statement = "SELECT `FullName` FROM `lawyer`  WHERE `Lawyer_ID`='12345678912345'";
                    $result = mysqli_query($connect, $statement);
                    while ($row = mysqli_fetch_array($result)) {
                      echo "<h4 value=$row[0]> $row[0] </h4>";
                    }
                    ?>
      </div>
    </header>


    <!--nav bar end-->
    <!--main content start-->

    <main>
      <div class="card_detail">
        <div class="detail_header">
          <h2>All Cases</h2>
          <a href="newtemplate.html" target="blank"><button>More Details</button></a>
        </div>
        <table>
          <tr>
            <th>Case Number</th>
            <th>Lawyer Type</th>
            <th>Claimer or<br>Defendant ID</th>
            <th>Session Date</th>
            <th>Case Type</th>
            <th>Court Name</th>
            <th>Status</th>
          </tr>
          <tr>
            <td>1</td>
            <td>Lawyer</td>
            <td>1</td>
            <td>1-1-2022</td>
            <td>Real Estate</td>
            <td>Masr El Gedida</td>
            <td><span class="status approved"><i class='fas fa-circle'></i> Approved</span></td>
          </tr>
          <tr>
            <td>1</td>
            <td>Lawyer</td>
            <td>1</td>
            <td>1-1-2022</td>
            <td>Real Estate</td>
            <td>Masr El Gedida</td>
            <td><span class="status pending"><i class='fas fa-circle'></i> Pending</span></td>
          </tr>
          <tr>
            <td>1</td>
            <td>Lawyer</td>
            <td>1</td>
            <td>1-1-2022</td>
            <td>Real Estate</td>
            <td>Masr El Gedida</td>
            <td><span class="status denied"><i class='fas fa-circle'></i> Denied</span></td>
          </tr>
          <tr>
            <td>1</td>
            <td>Lawyer</td>
            <td>1</td>
            <td>1-1-2022</td>
            <td>Real Estate</td>
            <td>Masr El Gedida</td>
            <td><span class="status approved"><i class='fas fa-circle'></i> Approved</span></td>
          </tr>
          <tr>
            <td>1</td>
            <td>Lawyer</td>
            <td>1</td>
            <td>1-1-2022</td>
            <td>Real Estate</td>
            <td>Masr El Gedida</td>
            <td><span class="status pending"><i class='fas fa-circle'></i> Pending</span></td>
          </tr>
          <tr>
            <td>1</td>
            <td>Lawyer</td>
            <td>1</td>
            <td>1-1-2022</td>
            <td>Real Estate</td>
            <td>Masr El Gedida</td>
            <td><span class="status denied"><i class='fas fa-circle'></i> Denied</span></td>
          </tr>
          <tr>
            <td>1</td>
            <td>Lawyer</td>
            <td>1</td>
            <td>1-1-2022</td>
            <td>Real Estate</td>
            <td>Masr El Gedida</td>
            <td><span class="status approved"><i class='fas fa-circle'></i> Approved</span></td>
          </tr>



          <?php
          $connect = mysqli_connect("localhost", "root", "", "e-law system");

          // $case_id = "SELECT `Case_ID` FROM `law_case`";
          // $Type = " SELECT `Type` From `lawyer` WHERE `Lawyer_ID` = (SELECT `Lawyer_ID` FROM `law_case`)";
          // $Citizen_ID = " SELECT `Citizen_ID` FROM `lawyer_citizen` WHERE `Lawyer_ID` = (SELECT `Lawyer_ID` FROM `lawyer`)";
          // $Session_Date = " SELECT `Session_Date` FROM `sessions` WHERE `Case_ID` = (SELECT `Case_ID` FROM `law_case`)";
          // $Case_type = "SELECT `Case_type` FROM 'law_case'";
          // $Title = "SELECT `Title` From `court` WHERE `Court_ID` = (SELECT `Court_ID` FROM `law_case`) ";
          // $Status = "SELECT `Status` FROM 'law_case'";

          $statement = "SELECT `law_case`.`Case_ID` , `Type` , `Citizen_ID`, `Session_Date` , `Case_type`, `Title` , `Status` FROM `law_case` 
              LEFT JOIN `lawyer` ON `lawyer`.`Lawyer_ID` = `law_case.Lawyer_ID` LEFT JOIN `lawyer_citizen` ON `lawyer_citizen.Lawyer_ID` = `law_case.Lawyer_ID`
           LEFT JOIN `sessions` ON  `sessions.Case_ID` = `law_case.Case_ID` LEFT JOIN `court` ON `court.Court_ID` = `law_case.Court_ID`";

          $result = mysqli_query($connect, $statement);
          while ($row = mysqli_fetch_array($result)) {
            echo ("  
              <td> $row[0] </td>
              <td> $row[1] </td>
              <td> $row[2] </td>
              <td> $row[3] </td>
              <td> $row[4] </td>
              <td> $row[5] </td>
              <td> $row[6] </td>
              </tr>
          ");
          };

          ?>

          <!-- $statement = "SELECT law_case.Case_ID , Type , Citizen_ID, Session_Date , Case_type, Title , `Status` FROM law_case 
          LEFT JOIN lawyer ON lawyer.Lawyer_ID = law_case.Lawyer_ID LEFT JOIN lawyer_citizen ON lawyer_citizen.Lawyer_ID = law_case.Lawyer_ID
          LEFT JOIN sessions ON  sessions.Case_ID = law_case.Case_ID LEFT JOIN court ON court.Court_ID = law_case.Court_ID"; -->


        </table>
      </div>
    </main>

    <!--Main content start-->





    <!--Main JS -->
    <script src="assets/js/main.js"></script>



</body>

</html>
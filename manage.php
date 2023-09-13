<?php
include('includes/config.php');
session_start();

if(empty( $_SESSION['ownerId'] )){
    header('Location: ../index.php'); // Redirect to the login page if ownerId is not set
        exit; 
    }


if (isset($_SESSION['email'])) {
   $email = $_SESSION['email'];
   $sql = "SELECT * FROM owner_list WHERE Email = '$email'";
   $row = $conn->query($sql);
   $data = $row->fetch_assoc();
}
$ownerID = $_SESSION['ownerId'];


$disp="";
$sql = "SELECT * FROM business_list AS bl 
INNER JOIN owner_list AS ol ON bl.ownerid = $ownerID && ol.ID = $ownerID
INNER JOIN brgyzone_list AS brgyl ON bl.BusinessBrgy = brgyl.ID
WHERE 
bl.ownerid = $ownerID";
$x = -1;
if ($rs=$conn->query($sql)) {
  if($rs->num_rows > 0){
    while ($row = $rs->fetch_assoc()) {
      $x++;
        if ($x % 3 == 0){
          $disp .= '</tr><tr id="' . $x . '">';
          } else {
            // echo "asd"
          }
      $disp.='<td class="col-md-4">
              <div class="property-item" style="box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2); padding: 20px;  border-radius: 15px;">
                <div class="pi-pic set-bg rounded-circle text-center d-flex align-items-center justify-content-center" style="width: 150px; height: 150px; border: 2px solid #355E3B;" data-setbg="img/company/jollibee.jpg">
                  <!-- Circular image with a border -->
              </div>
              <div class="pi-text">
                  <h5><a href="#">'.$row['BusinessName'].' - '.$row['BusinessBranch'].'</a></h5>
                  <p><span class="icon_pin_alt"></span>'.$row['BusinessAddress'].' '.$row['barangay'].' Zone: '.$row['zone'].'</p>
                  <div class="pi-agent">
                      <div class="pa-item">
                          <div class="pa-text">
                              <a class="btn btn-success" href="details.php?ID=' . $row['bus_id'] . '" role="button"><i class="fa fa-eye"></i> View</a>
                              <a class="btn btn-success" href="BusinessPanel.html" role="button"><i class="fa fa-pencil"></i> Edit</a>
                          </div>
                      </div>
                  </div>
              </div>
              </div>

      </td>';

    }
  }
}

?>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Aler Template">
    <meta name="keywords" content="Aler, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <title>BuDS</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700,800,900&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style1.css" type="text/css">
    <link rel="stylesheet" href="css/templatemo-plot-listing1.css" type="text/css">

</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Offcanvas Menu Wrapper Begin -->
    <div class="offcanvas-menu-overlay"></div>
    <div class="offcanvas-menu-wrapper">
        <div class="canvas-close">
            <span class="icon_close"></span>
        </div>
        <div class="logo">
            <a href="./homepage.php">
                <img src="img/logo-main.png" alt="">
            </a>
        </div>
        <div id="mobile-menu-wrap"></div>
    </div>
    <!-- Offcanvas Menu Wrapper End -->

    <!-- Header Section Begin -->
    <header class="header-section">
        <div class="hs-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2">
                        <div class="logo">
                            <a href="./homepage.php"><img src="img/logo-main.png" alt=""></a><br>
                            <!-- <ul>Business Directory</ul> -->
                        </div>
                    </div>
                    <div class="col-lg-10">
                        <div class="ht-widget">
                            <div class="hs-nav">
                                <nav class="nav-menu">
                                    <ul>
                                        <li class="profile-dropdown">
                                            <div class="user-profile">
                                                <img src="img/testimonial-author/unknown.jpg" alt="User's Name">
                                            </div>
                                            <ul class="dropdown dropleft">
                                              <li><h2><?php echo $data['Surname'] .' , '. $data['Firstname'] .' '. $data['MiddleName'] ?></h2>
                                                <li><a href="user.php">MY PROFILE</a></li>
                                                <li><a href="manage.php">MANAGE BUSINESS</a></li>
                                                <li><a href="listing-form.php">ADD BUSINESS</a></li>
                                                <li><a href="logout.php">LOGOUT</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="canvas-open">
                    <span class="icon_menu"></span>
                </div>
            </div>
        </div>
        <div class="hs-nav">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9">
                        <nav class="nav-menu">
                            <ul>
                              <li><a href="./homepage.php">Home</a></li>
                              <!-- <li><a href="./listing.html">Business Listing</a></li> -->
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Header End -->

    <!-- Property Details Section Begin -->
    <section class="property-details-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="pd-text">

                        <div class="container">
                            <div class="row">
                                <div class="col-lg-5">
                                    <div class="section-title">
                                        <br><h4>MANAGE BUSINESS</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <table id="result" class="d-flex justify-content-start">
                          <tbody>
                            <?php echo $disp ?>
                          </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="footer-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="fs-about">
                        <div class="fs-logo">
                            <a href="#">
                                <img src="img/flogo.png" alt="">
                            </a>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua ut aliquip ex ea</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer
    <!-- Footer Section End -->

    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/mixitup.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.richtext.min.js"></script>
    <script src="js/image-uploader.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>

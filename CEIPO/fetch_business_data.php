<?php
// Include your database configuration here
include '../includes../config.php';

// Check if the businessId is provided in the POST request
if (isset($_POST['businessId'])) {
    // Get the businessId from the POST data
    $businessId = $_POST['businessId'];

    // Initialize an empty response array
    $response = array();

    try {
        // Establish a database connection using your config
        $pdo = DATABASE::connection();

        // Query to fetch business data based on businessId
        $query = "SELECT *
            FROM business_list AS bl
            INNER JOIN business_requirement AS br ON bl.bus_id = br.bus_id
            INNER JOIN owner_list AS ol ON bl.ownerId = ol.ID
            INNER JOIN brgyzone_list AS bz ON bl.BusinessBrgy = bz.ID
            INNER JOIN category_list as c ON bl.BusinessCategory = c.ID
            INNER JOIN subcategory_list as sc ON bl.BusinessSubCategory = sc.ID
            INNER JOIN business_links as bsl ON bl.bus_id = bsl.bus_id
            WHERE bl.BusinessStatus = '4'
            AND bl.bus_id = :businessId";
        $stmt = $pdo->prepare($query);
        $stmt->bindParam(':businessId', $businessId, PDO::PARAM_INT);
        $stmt->execute();

        // Fetch the business data
        $businessData = $stmt->fetch(PDO::FETCH_ASSOC);

        // Populate the response array
      if ($businessData) {

        $response['businessName'] = $businessData['BusinessName'];
          $response['businessData'] = '
  <div class="d-flex justify-content-center">
    <img src="../img/logo/' . $businessData['Businesslogo'] . '" alt="user-avatar" class="img-circle img-fluid" width="150" height="150">
  </div>
  <div class="row">
    <strong style="font-size: 20px;">Overview</strong>
    <p class="text-muted" style="text-align: justify; padding: 5px; font-size: 16px;">
      ' . $businessData['BusinessDescrip'] . '
    </p>
    <hr>
  </div>
  <div class="row">
    <div class="col-6" style="text-align: left;">
      <strong><i class="bx bx-map"></i> Address</strong>
      <p class="text-muted" style="padding: 5px;">
        <span class="tag tag-danger">' . $businessData['BusinessAddress'] . '</span>
      </p>
    </div>
    <div class="col-6" style="text-align: left;">
      <div class="social-media-links">';

// Now, you can use PHP conditionals without embedding them within PHP tags in a string
if (!empty($businessData['bus_fb'])) {
    $response['businessData'] .= '
      <i class="bx bxl-facebook" style="font-size: 20px; color: #0C8AEF;"></i>
      <a href="' . $businessData['bus_fb'] . '" class="d-inline">' . $businessData['bus_fb'] . '</a><br>';
}

if (!empty($businessData['bus_twt'])) {
    $response['businessData'] .= '
      <i class="bx bxl-twitter" style="font-size: 20px; color: #1C9BF0;"></i>
      <a href="' . $businessData['bus_twt'] . '" class="d-inline">' . $businessData['bus_twt'] . '</a><br>';
}

if (!empty($businessData['bus_ig'])) {
    $response['businessData'] .= '
      <i class="bx bxl-instagram" style="font-size: 20px; color: #E13530;"></i>
      <a href="' . $businessData['bus_ig'] . '" class="d-inline">' . $businessData['bus_ig'] . '</a><br>';
}


if (empty($businessData['bus_ig']) && empty($businessData['bus_twt']) && empty($businessData['bus_fb'])) {
    $response['businessData'] .= '
      <i class="" style="font-size: 20px; color: #E13530;">Social Media Not Available </i>
      ';
}

$response['businessData'] .= '
      </div>
    </div>
  </div>
  <hr>
  <div class="row">
    <div class="col-6" style="text-align: left;">
      <strong><i class="bx bx-phone"></i> Contact Number</strong>
      <p class="text-muted">
        <span class="tag tag-danger" style="padding: 5px;">' . $businessData['BusinessNumber'] . '</span>
      </p>
    </div>
    <div class="col-6" style="text-align: left;">
      <strong><i class="bx bxs-star-half"></i> Overall Ratings</strong>
      <p class="text-muted">
        <span class="tag tag-danger" style="padding: 5px;"></span>
      </p>
    </div>
  </div>';
            // You can include additional fields here
        } else {
            $response['error'] = 'Business not found.';
        }
    } catch (PDOException $e) {
        // Handle database errors here
        $response['error'] = 'Database error: ' . $e->getMessage();
    }

    // Send the response as JSON
    header('Content-Type: application/json');
    echo json_encode($response);
} else {
    // If businessId is not provided in the POST request
    header('HTTP/1.1 400 Bad Request');
    echo 'Bad Request';
}
?>

<?php
include('includes/config.php');

if (isset($_POST['barangay'])) {
    $selectedBarangay = $_POST['barangay'];

    $sql = "SELECT zone, location FROM brgyzone_list WHERE barangay = '$selectedBarangay'";

    if ($result = $conn->query($sql)) {
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $data[] = array(
                    'zone' => $row['zone'],
                    'location' => $row['location']
                );
            }
            echo json_encode($data); // Encode the result as JSON
        } else {
            die("No data found.");
        }
    } else {
        die("Error:" . $conn->error);
    }
}
?>

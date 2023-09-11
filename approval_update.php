<?php 
include 'config.php';
$pdo = DATABASE::connection();

$response = array(); 

if (isset($_POST['views'])) {
    $id = $_POST['views'];
    $sql = "SELECT *
    FROM business_list AS bl
    INNER JOIN business_requirement AS br ON bl.bus_id = br.bus_id
    INNER JOIN owner_list AS ol ON bl.ownerId = ol.ID
    INNER JOIN brgyzone_list AS bz ON bl.BusinessBrgy = bz.ID
    INNER JOIN category_list as c ON bl.BusinessCategory = c.ID
    INNER JOIN subcategory_list as sc ON bl.BusinessSubCategory = sc.ID
    WHERE bl.bus_id = :id";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':id', $id, PDO::PARAM_INT);
    
    if ($stmt->execute()) {
        $userData = $stmt->fetch(PDO::FETCH_ASSOC);
        if ($userData) {
            $response = $userData;
        } else {
            $response = array(
                'status' => 'failed',
                'message' => 'Data not found'
            );
        }
    } else {
        $response = array(
            'status' => 'failed',
            'error' => $stmt->errorInfo()
        );
    }
}  elseif (isset($_POST['hiddendata'])) {
    $hiddendata = $_POST['hiddendata'];
    $status = $_POST['status'];
    $remarks =$_POST['remarks'];

    $sql = "UPDATE business_list SET BusinessStatus = :status , BusinessRemarks = :remarks WHERE bus_id = :hiddendata ";
    $stmt = $pdo->prepare($sql);
  
    if ($stmt->execute([
        ':status' => $status,
        ':hiddendata' => $hiddendata,
        ':remarks'=> $remarks
    ])) {
        $response = array(
            'status' => 'success'
        );
    } else {
        $response = array(
            'status' => 'failed',
            'error' => $stmt->errorInfo()
        );
    }
} else {
    $response = array(
        'status' => 'failed',
        'message' => 'Invalid request'
    );
}


echo json_encode($response);
?>

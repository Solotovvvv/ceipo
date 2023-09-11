<?php 
include 'config.php';
$pdo = DATABASE::connection();

$response = array(); 

if (isset($_POST['id'])) {
    $id = $_POST['id'];
    $sql = "SELECT *
    FROM business_list AS bl
    INNER JOIN business_requirement AS br ON bl.bus_id = br.bus_id
    INNER JOIN owner_list AS ol ON bl.ownerId = ol.ID
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
}  elseif (isset($_POST['hiddendata1'])) {
    $hiddendata1 = $_POST['hiddendata1'];
    $status = "4";
   
    $sql = "UPDATE business_list SET BusinessStatus = :status WHERE bus_id = :hiddendata ";
    $stmt = $pdo->prepare($sql);
  
    if ($stmt->execute([
        ':status' => $status,
        ':hiddendata' => $hiddendata1
       
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

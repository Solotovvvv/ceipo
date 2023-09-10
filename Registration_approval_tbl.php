<?php
include 'config.php';

$pdo = Database::connection();


$sql = "SELECT *
FROM business_list AS bl
INNER JOIN business_requirement AS br ON bl.bus_id = br.bus_id
INNER JOIN owner_list AS ol ON bl.ownerId = ol.ID
INNER JOIN brgyzone_list AS bz ON bl.BusinessBrgy = bz.ID
INNER JOIN category_list as c ON bl.BusinessCategory = c.ID
INNER JOIN subcategory_list as sc ON bl.BusinessSubCategory = sc.ID
";
$stmt = $pdo->prepare($sql);


$data = [];

if ($stmt->execute()) {
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
 
        $subarray = [
            '<td>' . $row['BusinessName'] . '</td>',
            '<td>' . $row['owner_name'] . '</td>',
            '<td>' . $row['category'] . '</td>',
            '<td>' . $row['BusinessStatus'] . '</td>',
          
            '<td><button type="button" class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#view">
            <i class="bx bx-show-alt"></i>
        </button></td>',
        ];
        $data[] = $subarray;
    }
}

$output = [
    'data' => $data,
];

echo json_encode($output);
?>

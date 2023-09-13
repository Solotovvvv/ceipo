<?php
include('includes/config.php');
$output = '';
$category = $_POST['category'];
$sql = "SELECT * FROM subcategory_list WHERE catId = '".$category."'";
$result = $conn->query($sql);

$output = '<select id="subcategory" name="BusinessSubCategory"> <option value="">Select Sub Category</option>';


while($data = $result->fetch_assoc()){ // Use object-oriented fetch_assoc()
    $output .= '<option value="'.$data["ID"].'">'.$data['subCategory'].'</option>';
}
$output.='</select>';
echo $output;

$conn->close();
?>

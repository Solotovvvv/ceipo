<?php

include 'includes/config.php';
$pdo = Database::connection();


if ($_SERVER["REQUEST_METHOD"] == "POST") {


    $firstName = $_POST["fname"];
    $middleName = $_POST["mname"];
    $surname = $_POST["sname"];
    $position = $_POST["position"];
    $address = $_POST["address"];
    $objective = $_POST["summary"];


    $contacts = $_POST['contacts'];
    $schools = $_POST['schools'];
    $school_address= $_POST['school_address'];
    $school_sy = $_POST['school_sy'];
    $exp_company = $_POST['exp_company'];
    $exp_position = $_POST['exp_position'];
    $work_experience = $_POST['work_experience'];
    $work_address = $_POST['work_address'];
    $exp_year = $_POST['exp_year'];
    $skills = $_POST['skills'];
    $cert_desc = $_POST['cert_desc'];
    $cert_year = $_POST['cert_year'];
    
    

    function implodeOrSetDefault($array, $defaultValue = '') {
      if (!empty($array)) {
          return implode(',  ', $array);
      } else {
          return $defaultValue;
      }
  }

  $contact = implodeOrSetDefault($contacts, '');
  $school = implodeOrSetDefault($schools, '');
  $s_address = implodeOrSetDefault($school_address, '');
  $s_sy = implodeOrSetDefault($school_sy, '');
  $e_company = implodeOrSetDefault($exp_company, '');
  $e_position = implodeOrSetDefault($exp_position, '');
  $w_experience = implodeOrSetDefault($work_experience, '');
  $w_address = implodeOrSetDefault($work_address, '');
  $e_year = implodeOrSetDefault($exp_year, '');
  $skill = implodeOrSetDefault($skills, '');
  $c_desc = implodeOrSetDefault($cert_desc, '');
  $c_year = implodeOrSetDefault($cert_year, '');
  $fullname = $firstName . ' ' . $middleName . ' ' . $surname;



  $query = "INSERT INTO `user_resume`(`fullname`, `position`, `address`, `summary`, `contacts`, `schools`, `school_address`, `school_sy`, `exp_company`, `exp_position`, `work_exp`, `work_address`, `exp_year`, `skills`, `cert_desc`, `cert_year`)  
   VALUES (:fullname, :position, :address, :summary, :contacts, :schools, :school_address, :school_sy, :exp_company, :exp_position, :work_exp, :work_address, :exp_year, :skills, :cert_desc, :cert_year)";


$stmt = $pdo->prepare($query);
$stmt->bindParam(':fullname', $fullname, PDO::PARAM_STR);
$stmt->bindParam(':position', $position, PDO::PARAM_STR);
$stmt->bindParam(':address', $address, PDO::PARAM_STR);
$stmt->bindParam(':summary', $objective, PDO::PARAM_STR);
$stmt->bindParam(':contacts', $contact, PDO::PARAM_STR);
$stmt->bindParam(':schools', $school, PDO::PARAM_STR);
$stmt->bindParam(':school_address', $s_address, PDO::PARAM_STR);
$stmt->bindParam(':school_sy', $s_sy, PDO::PARAM_STR);
$stmt->bindParam(':exp_company', $e_company, PDO::PARAM_STR);
$stmt->bindParam(':exp_position', $e_position, PDO::PARAM_STR);
$stmt->bindParam(':work_exp', $w_experience, PDO::PARAM_STR);
$stmt->bindParam(':work_address', $w_address, PDO::PARAM_STR);
$stmt->bindParam(':exp_year', $e_year, PDO::PARAM_STR);
$stmt->bindParam(':skills', $skill, PDO::PARAM_STR);
$stmt->bindParam(':cert_desc', $c_desc, PDO::PARAM_STR);
$stmt->bindParam(':cert_year', $c_year, PDO::PARAM_STR);


    if ($stmt->execute()) {
      header("Location: index.php");
      exit();
  } else {
      echo "Error inserting data: " . $stmt->errorInfo()[2];
  }
   
} else {
 
    echo "Invalid request method.";
}
?>

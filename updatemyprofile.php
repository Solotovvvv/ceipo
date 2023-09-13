<?php
include('includes/config.php');

if(isset($_POST['token'])){
    $id = $_POST['token'];
    $surname        =   $_POST['surname'];
    $firstname      =   $_POST['firstname'];
    $middlename     =   $_POST['middlename'];
    $age            =   $_POST['age'];
    $address        =   $_POST['address'];
    $contactnumber  =   $_POST['contactnumber'];

     $sql="UPDATE owner_list SET Surname ='$surname', Firstname = '$firstname', MiddleName = '$middlename', Age = '$age', Address = '$address', contactNumber = '$contactnumber' WHERE email='$id'";
    if($conn->query($sql)){
        $dtl = array();
        $sql = "SELECT * FROM `owner_list` WHERE `email`= '$id'";
        $rs = $conn->query($sql);
        $row = $rs->fetch_assoc();
        // $fullname = $row['Surname'] .' '. $row['Firstname'] .' '. $row['MiddleName'];
        // array_push($dtl,array('Name'=>$fullname,'Age'=>$row['Age'],'Address'=>$row['Address'],'ContactNumber'=>$row['contactNumber']));

        echo json_encode($dtl);
     }
     else{
         echo $conn->error;
     }


 }

?>

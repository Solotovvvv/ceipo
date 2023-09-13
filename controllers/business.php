<?php
require_once("../includes/config.php");
// session_start();



if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['payload'])) {
    $receivedData = json_decode($_POST['payload']);
    $receivedFunction = $_POST['setFunction'];

    if (function_exists($receivedFunction)) {
        $result = $receivedFunction($receivedData);
        echo $result;
    } else {
        echo "Invalid function name.";
    }
}

function addBusiness($request = null)
{
    $businessName = $request->businessName;
    $businessEmail = $request->businessEmail;
    $businessBranch = $request->businessBranch;
    $businessEstablish = $request->businessEstablish;
    $businessDescrip = $request->businessDescrip;
    $businessNumber = $request->businessNumber;
    $businessOpenHour = $request->businessOpenHour;
    $businessCloseHour = $request->businessCloseHour;
    $businessAddress = $request->businessAddress;
    $businessBarangay = $request->businessBarangay;
    $businessLat = $request->businessLat;
    $businessLong = $request->businessLong;
    $businessFb = $request->businessFb;
    $businessIg = $request->businessIg;
    $businessCategory = $request->businessCategory;
    $subCategory = $request->subCategory;

    session_start();
    if (isset($_SESSION['ownerId'])) {
        $ownerId = $_SESSION['ownerId'];
    } else {
        // Handle the case where the session owner ID is not set
        $msg['title'] = "Error";
        $msg['message'] = "Session owner ID not set";
        $msg['icon'] = "error";
        echo json_encode($msg);
    }

    $msg = array();

    if (!empty($_FILES['businessLogo']['name'])) {
        $filename = $_FILES['businessLogo']['name'];
        $size = $_FILES['businessLogo']['size'];
        $tmp_name = $_FILES['businessLogo']['tmp_name'];

        $validImageExtensions = ['jpg', 'jpeg', 'png'];
        $imageExtension = pathinfo($filename, PATHINFO_EXTENSION);
        $imageExtension = strtolower($imageExtension);

        if (!in_array($imageExtension, $validImageExtensions)) {
            $msg['title'] = "Warning";
            $msg['message'] = "Invalid image extension";
            $msg['icon'] = "warning";
            $msg['status'] = "error";
            echo json_encode($msg);
        } elseif ($size > 512000) {
            $msg['title'] = "Warning";
            $msg['message'] = "Image size is too large";
            $msg['icon'] = "warning";
            $msg['status'] = "error";
            echo json_encode($msg);
        }

        $newImageName = uniqid() . '.' . $imageExtension;
        $targetDirectory = '../img/logo/';
        $targetPath = $targetDirectory . $newImageName;

        if (move_uploaded_file($tmp_name, $targetPath)) {
            // Image uploaded successfully
            // ... Your existing database insertion logic ...

            $pdo = Database::connection();
            $sql = "INSERT INTO `business_list`(`ownerId`, `BusinessName`, `Businesslogo`, `BusinessEmail`, `BusinessBranch`, `BusinessEstablish`, `BusinessDescrip`, `BusinessNumber`, `BusinessOpenHour`, 
                `BusinessCloseHour`, `BusinessAddress`, `BusinessBrgy`, `BusinessCategory`, `BusinessSubCategory`, `BusinessStatus`) 
                VALUES (:owner, :busName, :logo, :email, :branch, :establish, :desc, :number, :open, :close, :address, :brgy, :category, :sub, :status)";
            $stmt = $pdo->prepare($sql);
            $stmt->execute(
                array(
                    ':owner' => $ownerId,
                    ':busName' => $businessName,
                    ':logo' => $newImageName,
                    ':email' => $businessEmail,
                    ':branch' => $businessBranch,
                    ':establish' => $businessEstablish,
                    ':desc' => $businessDescrip,
                    ':number' => $businessNumber,
                    ':open' => $businessOpenHour,
                    ':close' => $businessCloseHour,
                    ':address' => $businessAddress,
                    ':brgy' => $businessBarangay,
                    ':category' => $businessCategory,
                    ':sub' => $subCategory,
                    ':status' => 2 // Assuming 2 represents a certain status
                )
            );

            if ($stmt->errorCode() !== '00000') {
                $errorInfo = $stmt->errorInfo();
                $errorMsg = "SQL Error: " . $errorInfo[2] . " in query: " . $sql;
                // Handle the error as needed (e.g., logging, displaying an error message)
                $msg['title'] = "Error";
                $msg['message'] = $errorMsg;
                $msg['icon'] = "error";
                echo json_encode($msg);
            } else {
                // Get the newly inserted business ID
                $selectId = "SELECT * FROM business_list WHERE BusinessName = :name AND BusinessBranch = :branch";
                $pdo = Database::connection();
                $stmt1 = $pdo->prepare($selectId);
                $stmt1->bindValue(':name', $businessName, PDO::PARAM_STR);
                $stmt1->bindValue(':branch', $businessBranch, PDO::PARAM_STR);
                $stmt1->execute();
                $datas1  = $stmt1->fetchAll();
                foreach ($datas1 as $data) {
                    $id = $data['bus_id'];
                }

                $sql3 = "INSERT INTO business_location (`bus_id`, `bus_lat`, `bus_long`) 
                VALUES ( :id, :lat, :long)";
                $stmt1 = $pdo->prepare($sql3);
                $stmt1->execute(
                    array(
                        ':id' => $id,
                        ':lat' => $businessLat,
                        ':long' => $businessLong,
                    )
                );
                if ($stmt1->errorCode() !== '00000') {
                    $errorInfo = $stmt->errorInfo();
                    $errorMsg = "SQL Error: " . $errorInfo[2] . " in query: " . $sql;
                    // Handle the error as needed (e.g., logging, displaying an error message)
                    $msg['title'] = "Error";
                    $msg['message'] = $errorMsg;
                    $msg['icon'] = "error";
                    echo json_encode($msg);
                } else {

                    $sql2 = "INSERT INTO business_links (bus_id, bus_fb, bus_ig) 
                    VALUES ( :id, :fb, :ig)";
                    $stmt2 = $pdo->prepare($sql2);
                    $stmt2->execute(
                        array(
                            ':id' => $id,
                            ':fb' => $businessFb,
                            ':ig' => $businessIg,
                        )
                    );
                    if ($stmt2->errorCode() !== '00000') {
                        $errorInfo = $stmt->errorInfo();
                        $errorMsg = "SQL Error: " . $errorInfo[2] . " in query: " . $sql;
                        // Handle the error as needed (e.g., logging, displaying an error message)
                        $msg['title'] = "Error";
                        $msg['message'] = $errorMsg;
                        $msg['icon'] = "error";
                        echo json_encode($msg);
                    } else {
                        if ((!empty($_FILES['brgyClearance']['name']) && !empty($_FILES['DTIPermit']['name'])) &&
                            (!empty($_FILES['sanitaryPermit']['name']) && !empty($_FILES['cedula']['name'])) &&
                            !empty($_FILES['businessPermit']['name'])
                        ) {
                            $filename1 = $_FILES['brgyClearance']['name'];
                            $size1 = $_FILES['brgyClearance']['size'];
                            $tmp_name1 = $_FILES['brgyClearance']['tmp_name'];

                            $filename2 = $_FILES['DTIPermit']['name'];
                            $size2 = $_FILES['DTIPermit']['size'];
                            $tmp_name2 = $_FILES['DTIPermit']['tmp_name'];

                            $filename3 = $_FILES['sanitaryPermit']['name'];
                            $size3 = $_FILES['sanitaryPermit']['size'];
                            $tmp_name3 = $_FILES['sanitaryPermit']['tmp_name'];

                            $filename4 = $_FILES['cedula']['name'];
                            $size4 = $_FILES['cedula']['size'];
                            $tmp_name4 = $_FILES['cedula']['tmp_name'];

                            $filename5 = $_FILES['businessPermit']['name'];
                            $size5 = $_FILES['businessPermit']['size'];
                            $tmp_name5 = $_FILES['businessPermit']['tmp_name'];

                            $validImageExtensions = ['jpg', 'jpeg', 'png'];
                            $imageExtension1 = pathinfo($filename1, PATHINFO_EXTENSION);
                            $imageExtension1 = strtolower($imageExtension1);

                            $imageExtension2 = pathinfo($filename2, PATHINFO_EXTENSION);
                            $imageExtension2 = strtolower($imageExtension2);

                            $imageExtension3 = pathinfo($filename3, PATHINFO_EXTENSION);
                            $imageExtension3 = strtolower($imageExtension3);

                            $imageExtension4 = pathinfo($filename4, PATHINFO_EXTENSION);
                            $imageExtension4 = strtolower($imageExtension4);

                            $imageExtension5 = pathinfo($filename5, PATHINFO_EXTENSION);
                            $imageExtension5 = strtolower($imageExtension5);

                            if ((!in_array($imageExtension1, $validImageExtensions) && !in_array($imageExtension2, $validImageExtensions))
                                && (!in_array($imageExtension3, $validImageExtensions) && !in_array($imageExtension4, $validImageExtensions))
                                && !in_array($imageExtension5, $validImageExtensions)
                            ) {
                                $msg['title'] = "Warning";
                                $msg['message'] = "Invalid image extension";
                                $msg['icon'] = "warning";
                                $msg['status'] = "error";
                                echo json_encode($msg);
                            } elseif (($size1 > 512000 && $size2 > 512000)
                                && ($size3 > 512000 && $size4 > 512000) && $size5 > 512000
                            ) {
                                $msg['title'] = "Warning";
                                $msg['message'] = "Image size is too large";
                                $msg['icon'] = "warning";
                                $msg['status'] = "error";
                                echo json_encode($msg);
                            }

                            $targetDirectory = '../img/requirements/';
                            $newImageName1 = uniqid() . '.' . $imageExtension1;
                            $targetPath1 = $targetDirectory . $newImageName1;

                            $newImageName2 = uniqid() . '.' . $imageExtension2;
                            $targetPath2 = $targetDirectory . $newImageName2;

                            $newImageName3 = uniqid() . '.' . $imageExtension3;
                            $targetPath3 = $targetDirectory . $newImageName3;

                            $newImageName4 = uniqid() . '.' . $imageExtension4;
                            $targetPath4 = $targetDirectory . $newImageName4;

                            $newImageName5 = uniqid() . '.' . $imageExtension5;
                            $targetPath5 = $targetDirectory . $newImageName5;

                            if ((move_uploaded_file($tmp_name1, $targetPath1) && move_uploaded_file($tmp_name2, $targetPath2))
                                && (move_uploaded_file($tmp_name3, $targetPath3) && move_uploaded_file($tmp_name4, $targetPath4))
                                && move_uploaded_file($tmp_name5, $targetPath5)
                            ) {
                                $finalQuery = "INSERT INTO business_requirement (bus_id, bus_brgyclearance, bus_dtipermit, bus_sanitarypermit,bus_cedula,bus_mayorpermit) 
                                VALUES (:id, :photo1, :photo2, :photo3, :photo4, :photo5)";
                                $stmt5 = $pdo->prepare($finalQuery);
                                $stmt5->execute(
                                    array(
                                        ':id' => $id,
                                        ':photo1' => $newImageName1,
                                        ':photo2' => $newImageName2,
                                        ':photo3' => $newImageName3,
                                        ':photo4' => $newImageName4,
                                        ':photo5' => $newImageName5
                                    )
                                );
                                if ($stmt5->errorCode() !== '00000') {
                                    $errorInfo = $stmt->errorInfo();
                                    $errorMsg = "SQL Error: " . $errorInfo[2] . " in query: " . $sql;
                                    // Handle the error as needed (e.g., logging, displaying an error message)
                                    $msg['title'] = "Error";
                                    $msg['message'] = $errorMsg;
                                    $msg['icon'] = "error";
                                    echo json_encode($msg);
                                } else {
                                    $msg['title'] = "Successful";
                                    $msg['message'] = "Business added successfully";
                                    $msg['icon'] = "success";
                                    $msg['status'] = "success";
                                    echo json_encode($msg);
                                }
                            } else {
                                $msg['title'] = "Error";
                                $msg['message'] = "Failed to move uploaded image to destination";
                                $msg['icon'] = "error";
                                $msg['status'] = "error";
                                $msg['debug'] = $_FILES; // Add this for debugging
                                echo json_encode($msg);
                            }
                        } else {
                            $msg['title'] = "Error";
                            $msg['message'] = "No image uploaded";
                            $msg['icon'] = "error";
                            $msg['status'] = "error";
                            echo json_encode($msg);
                        }
                    }
                }
            }
        } else {
            // Failed to upload image
            $msg['title'] = "Error";
            $msg['message'] = "Failed to move uploaded image to destination";
            $msg['icon'] = "error";
            $msg['status'] = "error";
            $msg['debug'] = $_FILES; // Add this for debugging
            echo json_encode($msg);
        }
    } else {
        // Handle the case where no image is uploaded
        $msg['title'] = "Error";
        $msg['message'] = "No image uploaded";
        $msg['icon'] = "error";
        $msg['status'] = "error";
        echo json_encode($msg);
    }
}

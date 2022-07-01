<?php

$token = $_POST['token_no'];
$value =$_POST['value'];
echo $token;
echo $value;
// include('../config.php');
include('../session.php');
$result = mysqli_query($db,"UPDATE `request_table` SET `Status` = '$value' WHERE `request_table`.`token_no` = $token;");
if($result){
    echo "successful update";
    header("location:service_view.php?id=$token");
    
}

?>
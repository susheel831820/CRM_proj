<?php
include('config.php');
$serviceman_id = $_POST['service_man'];
$token = $_POST['token_no'];
echo"service man Id : ".$serviceman_id;
echo "token_no".$token;
$query = "INSERT INTO `allocation`(`token_no`, `serviceman_id`) VALUES ('$token','$serviceman_id');";
$result = mysqli_query($db,$query);
// $resultcheck= mysqli_num_rows($result);
if ($result>0){
    // echo "successful entered data";
    header("location:Dashboard_admin.php");
    mysqli_query($db,"UPDATE `request_table` SET `Status` = 'on going' WHERE `request_table`.`token_no` = $token;");

}
else{
    echo "data not entered failed";

}


?>
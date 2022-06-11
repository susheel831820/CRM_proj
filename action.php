<?php
    include('config.php');
    $name = $_POST['fname'];
    $email=$_POST['femail'];
    $user_id=$_POST['fuser_id'];
    $password=$_POST['fpassword'];
  $sql="INSERT INTO `login`(`Sno`, `Ac_type`, `usr_id`, `pass`, `email`, `name`) VALUES (NULL,'user','$user_id','$password','$email','$name');";
  $result = mysqli_query($db,$sql);
  if($result==1){
   header("location:success.php");
  }
  else{

   header("location:success.php");
  }
  



?>

<?php

//  include('config.php');
 include('session.php');
 $full_name= $_POST['name'];
 $email= $_POST['email'];
 $phone= $_POST['phone'];
 $alt_phone= $_POST['alt-phone'];
 $bill_no= $_POST['bill_No'];
 $brand= $_POST['slct1'];
 $model= $_POST['slct2'];
 $address= $_POST['Address'];
 $description= $_POST['discription'];
 echo $full_name."\n";
 echo $email."\n";
 echo $phone."\n";
 echo $alt_phone."\n";
 echo $bill_no."\n";
 echo $brand."\n";
 echo $model."\n";
 echo $address."\n";
 echo $description."\n";
 echo $sno;

  $query = "INSERT INTO `request_table`(`Name`, `Phone`,`Alt-phone_no`, `Email`, `Bill_no`, `Brand`, `Model`,`Address`, `Description`, `Photo`, `Status`, `Sno`,`token_no`) VALUES ('$full_name','$phone','$alt_phone','$email','$bill_no','$brand','$model','$address','$description','photoxyz.jpg','pending','$sno',NULL);";
  $result = mysqli_query($db,$query);
  if($result==1){
   header("location:Dashboard_user.php");
    echo "succesesfull data submit" ;
  }
  else{
   echo "not insertted data";
  //  header("location:success.php");
  }

?>
<?php
   include('config.php');
   session_start();
   
   $user_check = $_SESSION['login_user'];
   
   $ses_sql = mysqli_query($db,"select * from login where usr_id = '$user_check' ");

   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   $actype = $row['Ac_type'];
   $name = $row['name'];
   $sno= $row['Sno'];
  
   if(!isset($_SESSION['login_user'])){
      header("location:index.php");
      die();
   }
?>
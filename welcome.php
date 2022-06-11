<?php
   include('session.php');

      if($actype == "user"){
        header("location:Dashboard_user.php");
    }
    elseif($actype =="admin"){
        header("location:Dashboard_admin.php");
    }
    elseif($actype =="service"){
        header("location:Dashboard_service.php");

    }
      ?>

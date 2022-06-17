<?php
   include('session.php');

      if($actype == "user"){
        header("location:user/Dashboard_user.php");
    }
    elseif($actype =="admin"){
        header("location:admin/Dashboard_admin.php");
    }
    elseif($actype =="service"){
        header("location:service/Dashboard_service.php");

    }
      ?>

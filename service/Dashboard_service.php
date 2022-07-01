<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Service Man</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="../css/style1.css">
</head>


<?php
   include('../session.php');
?>
<body>
                 <div class="main-bar">
                 <nav>
                     <input type="checkbox" id="check">
                     <label for="check" class="checkbtn">
                     <span></span>
                     <span></span>
                     <span></span>
                     <span></span>
                     </label>
               <div class="logo-header">
                 <h1>CRM</h1>
               </div>
               <div id="namebar">
               <h2><?php echo strtoupper($name);?></h2>
               </div>
                <ul style="height: 971px;">
                    <li class="active"><a href="Dashboard_service.php">Dhashboard</a></li>
                    <li><a href="history.php">All ticket</a></li>
                    <li><a href="closed.php">Closed ticket</a></li>
                    <li><a href="#">Setting</a></li>
                    <li><a href="../logout.php">Logout</a></li>
</ul>
</nav>
</div>
<div class="container">
<?php
    $query = "SELECT * FROM `allocation` WHERE `serviceman_id`= $sno;";
    $result = mysqli_query($db,$query);
    $Total_allocate = mysqli_num_rows($result);
    $new_allocation='0';
    // echo "totoal allocate:".$Total_allocate;?>
    <div style="display:flex ;width:655px;">
      <div class="dash-card">
      <h3 style="margin-left:20px;">Total Request : <?php echo $Total_allocate;?></h3>
      <button class="btn btn-default" style="margin-left:210px; margin-top:10px;"><a href="history.php">View</a></button>
      </div>
     
     
       <?php
    if ($Total_allocate > 0){

    while($row = mysqli_fetch_assoc($result)){
        $token_no =  $row['token_no'];
        $query1 = "SELECT * FROM `Request_table` WHERE `token_no` = $token_no and `Status` != 'closed';";
        $result1 = mysqli_query($db,$query1);
        $new_allocate =mysqli_num_rows($result1);
         if($new_allocate>0){
        
        $new_allocation += 1;

        

         }
         
    }
    
}
?>
 <div class="dash-card" style="margin-left:40px;">
          <h3 style="margin-left:20px;">New Request :<?php echo $new_allocation?>
         </h3>
            <button class="btn btn-default" style="margin-left:210px; margin-top:10px;"><a href="pending.php">View</a></button>
        </div>

    </div><?php

  ?>
</div>
            <footer> 
                     <h4><i>&copy;Copyright Reserved.</i></h4>
                    </footer>
                   
</body>
</html>
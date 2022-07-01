<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="../css/style1.css">
  <!-- <link rel="stylesheet" href="css/style.css"> -->
</head>
<?php
   include('../session.php');
?>
<script>
function send_token(id){
          //  console.log(no); 
   
  </script>
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
                 <h1 style="color:white;">CRM</h1>
               </div>
               <div id="namebar">
               <h2><?php echo strtoupper($name);?></h2>
               </div>
               
                <ul>
                    <!-- <span  id="nameShown"style="color:white; margin-right:20px; font-size:25px;"><h2><?php echo strtoupper($name);?></h2></span> -->
                    <li class="active"><a href="dashboard_admin.php">Dashboard Admin</a></li>
                    <li><a href="All_history.php">All tickets</a></li>
                    <li><a href="search_ticket.php">Search tickets</a></li>
                    <li><a href="pending.php">Pending tickets</a></li>
                    <li><a href="closed.php">closed tickets</a></li>
                    <li><a href="../logout.php">Logout</a></li>

</ul>
</nav>
</div>
<div class="container">
<div class="welcome-box">
        <h1 style=""> Welcome <?php echo strtoupper($name)?></h1>

    </div>
    <?php
    $sql = "SELECT * FROM `request_table` WHERE 1";
    $result = mysqli_query($db,$sql);
    $no_of_request =  mysqli_num_rows($result);
    $sql2 = "SELECT * FROM `request_table` WHERE `status`='pending'";
    $result2 = mysqli_query($db,$sql2);
    $no_new_request =  mysqli_num_rows($result2);
    
    ?>
    <div style="display:flex ;width:655px;">
    <div class="dash-card">
      <h3 style="margin-left:20px;">Total Request : <?php echo $no_of_request;?></h3>
      <button class="btn btn-default" style="margin-left:210px; margin-top:10px;"><a href="All_history.php">View</a></button>
    </div>
    <div class="dash-card" style="margin-left:40px;">
     <h3 style="margin-left:20px;">New Request : <?php echo $no_new_request;?></h3>
      <button class="btn btn-default" style="margin-left:210px; margin-top:10px;"><a href="pending.php">View</a></button>
    </div>

    </div>
</div>
            <footer>
                     <h4><i>&copy;Copyright Reserved.</i></h4>
            </footer>
                   
</body>

</html>
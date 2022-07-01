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
                    <li><a href="closed.php">Closed tickets</a></li>
                    <li><a href="../logout.php">Logout</a></li>

</ul>
</nav>
</div>
<div class="container" style="display:flex;  margin-left:400px;" >

  <?php
    $query = "SELECT * FROM `Request_table` WHERE `status`='pending';";
    $result = mysqli_query($db,$query);
    $resultcheck = mysqli_num_rows($result);
    ?>
       <div class="row" style="width:1099px; margin-top:50px;">
        <?php
     if ($resultcheck > 0){
        while($row = mysqli_fetch_assoc($result)){
             
        
           
    
        ?>
       
        <div class="col-sm-3" style="width:300px;  ">
        <form action="view_query.php" method="post">
            <div class="panel panel-default">
                    <div class="panel-heading">
                        <h1>Token No :<?php echo $row['token_no']?></h1>
                        <h5><b>Name :</b><?php echo $row['Name']?></h5>
                        <h5><b>Mobile No :</b><?php echo $row['Phone']?></h5>
                        <h5><b>Status :</b><?php echo $row['Status']?></h5>
                    </div>          
                    <div class="panel-footer" style="margin-bottom:10px; background-color: #fff;" >
                    <button  type="submit" class="btn btn-primary" name ="id" value="<?php echo $row['token_no']?>"  style="right: 0px; margin-top: 24px;  height: 36px; margin-left: 94px;margin-right: 69px;    width: 89px;">View</button>
                    </div>
                </form>
                    
            </div>

        </div>
        <?php
     }}
     else{
        // echo "there is no pending tickets";
    ?>
    <div id="massage">
    <h1>There is no pending tickets .</h1> 
    </div>
    <?php
        }
     ?>
    </div>
     
     
</div>

</div>
            <footer>
                     <h4><i>&copy;Copyright Reserved.</i></h4>
            </footer>
                   
</body>

</html>
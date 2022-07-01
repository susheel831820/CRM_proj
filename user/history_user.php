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
var status = document.getElementById(name);
console.log(status)
$(document).ready(function(){

if (document.getElementById('tex').value != 'closed !')
{
    document.getElementById('tex').setAttribute("style", "color:green;");
}
else
{
    document.getElementById('tex').setAttribute("style", "color:red;");
}
});
   
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
               
                <ul style="height: 734px;">
                    <!-- <span  id="nameShown"style="color:white; margin-right:20px; font-size:25px;"><h2><?php echo strtoupper($name);?></h2></span> -->
                    <li class="active"><a href="dashboard_user.php">Dhashboard</a></li>

                    <li><a href="history_user.php">All Ticket</a></li>
                    <li><a href="request.php"> New Request</a></li>
                    <li><a href="../logout.php">Logout</a></li>
</ul>
</nav>
</div>
<div class="container">
  <div class="search-form">
    <form action="#" class="form">
      <h4>Search : </h4>
      <div class="form-group">
        <input type="text" name ="name" class="form-control">
        
      </div>
      <div class="form-group">
      <input type="number" name="mobile-no" class="form-control">

      </div>
      <div class="form-group">
      <input type="submit"  class="form-control">

      </div>
    </form>
  </div>
  <?php
    $query = "SELECT * FROM `Request_table` WHERE 1";
    $result = mysqli_query($db,$query);
    $resultcheck = mysqli_num_rows($result);
    if ($resultcheck > 0){

    while($row = mysqli_fetch_assoc($result)){
  ?>
 <div class="card" style="display: flex; width: 870px; margin-top: 96px; margin-left: 120px;    height: 126px; padding: 20px;     border: 1px solid black;">
          <div class="card-header"  style="width: 321px;"   >
            <form action="user_view_query.php" method="get">
             <h2 name="token_no">Ticket No: <?php  echo $row['token_no'];?></h2>
          </div>
          <div class="card-body"  style="    display: flex;    flex-direction: row; margin-left: 67px;">
            <h3 style="    margin-top: 23px; width: 294px;"><?php echo "Name : ".$row['Name']; ?></h3><br>
            <h3><?php echo "Problem :".$row['Description']; ?><br>status:<span><?php echo $row['Status']?></span>
            <button  type="submit" class="btn btn-primary" name ="id" value="<?php echo $row['token_no']?>"  style="right: 0px; margin-top: 24px;  height: 36px; margin-left: 94px;margin-right: 69px;    width: 89px;">View</button>
          </div>
          </form>   
 </div>
    <?php
    }
    }
    else{
   ?> 
        <div>
            <h1 style="color: red">Sorry No Request Yet </h1>
        </div>
    <?php
    } 
    ?>
</div>

            <footer>
                     <h4><i>&copy;Copyright Reserved.</i></h4>
            </footer>
                   
</body>

</html>







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
  <link rel="stylesheet" href="css/style1.css">
  <!-- <link rel="stylesheet" href="css/style.css"> -->
</head>
<?php
   include('session.php');
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
                    <li class="active"><a href="#">Admin</a></li>
                    <li><a href="#">History</a></li>
                    <li><a href="#">Setting</a></li>
                    <li><a href="logout.php">Logout</a></li>

</ul>
</nav>
</div>
<div class="container">
  <?php
    $query = "SELECT * FROM `Request_table`;";
    $result = mysqli_query($db,$query);
    $resultcheck = mysqli_num_rows($result);
    if ($resultcheck > 0){

    while($row = mysqli_fetch_assoc($result)){
  ?>
 <div class="card" style="display: flex; width: 870px; margin-top: 96px; margin-left: 120px;    height: 126px; padding: 20px;     border: 1px solid black;">
          <div class="card-header"  style="width: 321px;"   >
            <form action="view_query.php" method="post">
             <h2 name="token_no">Request <?php  echo $row['token_no'];?></h2>
          </div>
          <div class="card-body"  style="    display: flex;    flex-direction: row; margin-left: 67px;">
            <p style="    margin-top: 23px; width: 294px;"><?php echo "Name : ".$row['Name']; ?></p><br>
            <p><?php echo "Problem :".$row['Description']; ?></p>
            
            <button  type="submit" class="btn btn-primary" name ="id" value="<?php echo $row['token_no']?>"  style="right: 0px; margin-top: 24px;  height: 36px; margin-left: 94px;margin-right: 69px;    width: 89px;">View</button>
          </div>
          </form>   
 </div>
    <?php
    }
    } 
    ?>
</div>
            <footer>
                     <h4><i>&copy;Copyright Reserved.</i></h4>
            </footer>
                   
</body>

</html>
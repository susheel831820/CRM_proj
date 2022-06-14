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
  <link rel="stylesheet" href="css/style1.css">
</head>

<script>
function populate(s1,s2){
	var s1 = document.getElementById(s1);
	var s2 = document.getElementById(s2);
	s2.innerHTML = "";
	if(s1.value == "samsung"){
		var optionArray = ["Model|Model","m11|m11","a51|a51","a31|a31"];
	} else if(s1.value == "realmi"){
		var optionArray = ["Model|Model","realmi 2 pro|realmi 2 pro","realme GT Neo 3|realme GT Neo 3","realmi 9|realmi 9"];
	} else if(s1.value == "oppo"){
		var optionArray = ["Model|Model","A54|A54","A31|A31"];
	}
	for(var option in optionArray){
		var pair = optionArray[option].split("|");
		var newOption = document.createElement("option");
		newOption.value = pair[0];
		newOption.innerHTML = pair[1];
		s2.options.add(newOption);
	}
}
</script>
<?php
   include('session.php');
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
                    <li class="active"><a href="Dashboard_service.php">User</a></li>
                    <li><a href="#">History</a></li>
                    <li><a href="#">Setting</a></li>
                    <li><a href="logout.php">Logout</a></li>
</ul>
</nav>
</div>
<div class="container">
<?php
    $query = "SELECT * FROM `allocation` WHERE `serviceman_id`= $sno;";
    $result = mysqli_query($db,$query);
    $resultcheck = mysqli_num_rows($result);
   
       
    if ($resultcheck > 0){

    while($row = mysqli_fetch_assoc($result)){
        $token_no =  $row['token_no'];
        $query1 = "SELECT * FROM `Request_table` WHERE `token_no` = $token_no;";
        $result1 = mysqli_query($db,$query1);
         if(mysqli_num_rows($result1)>0){
         while($row1 =  mysqli_fetch_assoc($result1)){
                    ?>

<div class="card" style="display: flex; width: 870px; margin-top: 96px; margin-left: 120px;    height: 126px; padding: 20px;     border: 1px solid black;">
          <div class="card-header"  style="width: 321px;"   >
            <form action="service_view.php" method="get">
             <h2 name="token_no">Request <?php  echo $row['token_no'];?></h2>
          </div>
          <div class="card-body"  style="    display: flex;    flex-direction: row; margin-left: 67px;">
            <p style="    margin-top: 23px; width: 294px;"><?php echo "Name : ".$row1['Name']; ?></p><br>
            <p><?php echo "Problem :".$row1['Description']; ?></p>
            
            <button  type="submit" class="btn btn-primary" name ="id" value="<?php echo $row1['token_no']?>"  style="right: 0px; margin-top: 24px;  height: 36px; margin-left: 94px;margin-right: 69px;    width: 89px;">View</button>
           
           

          </div>
          </form>   
 </div>




                    <?php
        
            }

         }
    }
}
  ?>
</div>
            <footer> 
                     <h4><i>&copy;Copyright Reserved.</i></h4>
                    </footer>
                   
</body>
</html>
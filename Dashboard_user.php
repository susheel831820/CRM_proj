<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User</title>
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
		var optionArray = ["|","m11|m11","a51|a51","a31|a31"];
	} else if(s1.value == "realmi"){
		var optionArray = ["|","realmi 2 pro|realmi 2 pro","realme GT Neo 3|realme GT Neo 3","realmi 9|realmi 9"];
	} else if(s1.value == "oppo"){
		var optionArray = ["|","A54|A54","A31|A31"];
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
                <ul>
                    <li class="active"><a href="#">User</a></li>
                    <li><a href="#">History</a></li>
                    <li><a href="#">Setting</a></li>
                    <li><a href="logout.php">Logout</a></li>
</ul>
</nav>
</div>
<div class="container">
        <h3>Request For Service</h3>  <br>
        <form class="form">
        <div class="input-group" id="name" style="dispaly:inline-block">
    <!-- <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span> -->
     Full Name<input id="fname" type="text" class="form-control" name="fname" placeholder="Full Name" ><span class="formerror"></span>
        </div>
        <div class="input-group" id="email" style="dispaly:inline-block">
    <!-- <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span> -->
    Email <input id="email" type="text" class="form-control" name="email" placeholder="EMAIL" ><span class="formerror"></span>
        </div>

        <div class="input-group" id="phone" style="dispaly:inline-block">
    <!-- <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span> -->
     Phone<input id="phone" type="phone" class="form-control" name="phone" placeholder="Enter Your Phone No." ><span class="formerror"></span>
        </div>

        <div class="input-group" id="altname" style="dispaly:inline-block">
                   <!-- <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span> -->
                 Alternative Phone <input id="alt phone" type="alt phone" class="form-control" name="Alternative phone" placeholder="Alt Phone No." ><span class="formerror"></span>
        </div>

        <div class="input-group" id="billno" style="dispaly:inline-block">
                   <!-- <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span> -->
                 Bill No. <input id="billNo" type="billNo" class="form-control" name="billNo" placeholder="Bill No." ><span class="formerror"></span>
        </div>

        <div class="input-group">
        <select id="slct1" name="slct1"  onchange="populate(this.id,'slct2')">
        <option value=" ">Brand</option>
            <option value="samsung">samsung</option>
            <option value="oppo">oppo</option>
            <option value="realmi">realmi</option>
            <option value="lava">lava</option>
            </select>
            
            <select id="slct2"></select><br>
        </div>
        
            <div class="input-group" id="textarea" style="dispaly:inline-block">
                   <!-- <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span> -->
                   Description:<input id="textarea" type="textarea" class="form-control" name="textarea" placeholder=" text area" ><span class="formerror"></span>
           </div>
          

           <div class="input-group" id="address" style="dispaly:inline-block">
                   <!-- <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span> -->
                 Address <input id="address" type="address" class="form-control" name="address" placeholder="Address" ><span class="formerror"></span>
        </div>


        <div class="input-group" id="submit" style="dispaly:inline-block">
                   <!-- <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span> -->
                   <input id="submit" type="submit" class="form-control btn btn-primary" name="submit" placeholder=" Submit" ><span class="formerror"></span>
                   <button class ="btn btn-default" id="clear-btn">clear</button>
           </div>
</div>
            <footer>
                     <h4><i>&copy;Copyright Reserved.</i></h4>
                    </footer>
                   
</body>
</html>
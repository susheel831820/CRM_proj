<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="css/style.css">

    <title>Create user</title>
    <style>
      .formerror{
        font-size: 13px;
    color: red;
    position: absolute;
    margin-left: -384px;
    margin-top: 37px;
      }
    </style>
    <script>
      function clearError(){
        errors = document.getElementsByClassName('formerror');
        for(let item of errors){
          item.innerHTML= "";
        }
      }
      function seterror(id,error){
        element = document.getElementById(id);
        // console.log(error);
        // console.log(element);
        element.getElementsByClassName('formerror')[0].innerHTML = error;


      }
    function validateform(){
      clearError();

      var returnval = true;
         // perform the validation if it not valid then send returnval to false
      var name = document.forms['myform']['fname'].value;
      
      // console.log(name);
         if (name.length<3){
           seterror("name","*length  of name is too short");
            returnval = false;

         }
         var mobile = document.forms['myform']['fmobile'].value;

         if(mobile.length<10){
          seterror("Mnumber","*pls enter correct mobile no");
            returnval = false;
         }
         if (mobile.length>10){
            seterror("Mnumber","*pls enter correct mobile no");
            returnval = false;
         }
         var email = document.forms['myform']['femail'].value;

          if(email.length>20){
 seterror("email","*Email is too long");
   returnval = false;
}
         var password = document.forms['myform']['fpassword'].value;
         if (password.length<8){
           seterror("password","*password shoud be al least 8 digit");
            returnval = false;

         }
         var cpassword = document.forms['myform']['confirm-passward'].value;
         if(password != cpassword){
          seterror("Cpassword","*Password does not match");
          returnval = false;
         }

      return returnval;

      

}
</script>
</head>


<body>

 <div class="container" style="height:525px;     border-color: #5e041d;">
     
         <div class="form">
             <form action="action.php" method="post" id="myform" onsubmit="return validateform()">
                <h1 style="font-family: serif; font-size: 38px; color: #5e041d;">Create new user</h1>
                
                 <div class="input-group" id="name" style="dispaly:inline-block">
    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
    <input id="fname" type="text" class="form-control" name="fname" placeholder="Full Name" ><span class="formerror"></span>
    
    
  </div>
  <div class="input-group" id="email">
    <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
    <input id="femail" type="email" class="form-control" name="femail" placeholder="Email" >
    <span class="formerror"></span>
  </div>
  <div class="input-group" id="username">
    <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
    <input id="fuser_id" type="username" class="form-control" name="fuser_id" placeholder="Username" >
    <span class="formerror"></span>
  </div>
  <div class="input-group" id="Mnumber">
    <span class="input-group-addon"><i class="glyphicon glyphicon-phone-alt"></i></span>
    <input id="fmobile" type="mobile" class="form-control" name="fmobile" placeholder="Mobile No" >
    <span class="formerror"></span>
  </div>
  <div class="input-group" id="password">
    <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
    <input id="fpassward" type="password" class="form-control" name="fpassword" placeholder="Password" >
    <span class="formerror"></span>
  </div>
  <div class="input-group" id="Cpassword">
    <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
    <input id="confirm-passward" type="password" class="form-control" name="confirm-passward" placeholder=" confirmPassword" >
    <span class="formerror"></span>
  </div>
  <div class="" style="display:inline-block; ">
  <div>

  <input class="btn btn-primary" type="submit" id="register" name="create" value="Sign Up" style="justify-content: center; left-margin:0px;">
  <!-- <button class ="btn btn-default">clear</button> -->
  </div>
 
  </div>

             </form>
             
     
         </div>
     </div>

</body>

</html>
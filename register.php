<!DOCTYPE html>
<html>
<head>
<?php
$mysqli = mysqli_connect("localhost","root","","airline");
if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}

if (isset($_POST['register'])) 
{
  $fname=$_POST['fname'];
  $lname=$_POST['lname'];
  $pass=$_POST['pass'];
  $cpass=$_POST['cpass'];
  $gender=$_POST['gender'];
  $pnumber=$_POST['pnumber'];
  $pcode=$_POST['pcode'];




  
  $sql = "INSERT INTO userregister (fname,lname,pass,cpass,gender,pnumber,pcode)
VALUES ('$fname','$lname', '$pass', '$cpass', '$gender', '$pnumber','$pcode')";
$mysqli->query($sql);                                          
                                         

}
  ?>    

  <font face=Adobe Gothic std" font size="10" font color="green"><b>
         <marquee>REGISTERATION LOGIN</marquee></b></font>
	<title></title>
	 <style type="text/css">
        body
        {
          background-image: url("bgimage.jpg");
        background-size: cover;
        }
      </style>
</head>
<body>





	 <div class="wrapper">
     <div class="title">
        <H2 ALIGN="CENTER">REGISTERATION LOGIN</H2>
      <body>
        <form method="post">
          </div>
            
          
                    <div class="form">
            <div class="input_field">
               <label>First Name</label>
               <input type="text" name="fname" class="input">
               </div>
            <div class="form">     
            <div class="input_field">
               <label>Last Name</label>
               <input type="text" name="lname" class="input">
               </div>
           <div class="form">        
            <div class="input_field">
               <label>password</label>
<input type="password" name="pass" class="input">
               </div>
             <div class="form">        
            <div class="input_field">
               <label> confirm password</label>
         <input type="password" name= "cpass" class="input">
               
               </div>        
            <div class="input_field">
               <label> gender</label>
                <div class="custom_select">
                   <select name="gender">
                   <option value="">select</option>
                   <option value="male">male</option>
                    <option value="female">female</option>
                    </select>
                    </div>
                    <div class="input_field">
                       <label>phone number</label>
                       <input type="text" name="pnumber" class="input">
                       </div>
                    <div class="input_field">
                       <label> Postal code</label>
                       <input type="text" name="pcode" class="input">
                        </div>
                    <div class="input_field terms">
                      <label class="check">
                      <input type="checkbox">
                      <span class="checkmark"></span>
                      </label>
                      <p>Agreed to terms and conditions</p font color="red">
                      </div>
                      <div class="input_field">
                          <input type="Reset" name="reset" value="RESET">
                          <input type="submit" name="register" value="REGISTER" class>
                          </div>
                         </form>
                  <font face=Adobe Gothic Std" font size="4" font color="red"><b>
                     <marquee>THANK YOU FOR VISITING, REGISTER FOR YOUR TICKETS ,HELPLINE NUMBER+91 94000 5987 6547 </marquee></b></font>

</body>
</html>
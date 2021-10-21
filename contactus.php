<!DOCTYPE html>
<html>
<head>
<?php
$mysqli = mysqli_connect("localhost","root","","airlinecontact");
if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}

if (isset($_POST['register'])) 
{
  $fullname=$_POST['fullname'];
  $email=$_POST['email'];
  $pnumber=$_POST['pnumber'];
  

$sql = "INSERT INTO userregister (fullname,email,pnumber,)
VALUES ('$fullname','$email' ,'$pnumber',)";
$mysqli->query($sql);                                          
                                         

}
  ?>    


    <div class="form">
            <div class="input_field">
               <label>fullName</label>
               <input type="text" name="fullname" class="input">
               </div>
            <div class="form">     
            <div class="input_field">
               <label>email</label>
               <input type="text" name="lname" class="input">
                </div>
                <div class="input_field">
                       <label>phone number</label>
                       <input type="text" name="pnumber" class="input">
                       </div>
                     <div class="input_field">
                     <input type="submit" name="register" value="REGISTER" class>
                          </div>
                         </form>
                        </body>
                         </html>








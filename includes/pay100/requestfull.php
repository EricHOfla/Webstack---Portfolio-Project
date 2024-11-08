<?php
session_start();
include('includes/config.php');
error_reporting(0);
if(isset($_POST['signup']))
{
$email=$_POST['emailid'];  
$mobileno=$_POST['mobileno'];
$address=$_POST['address'];
$file=$_POST['file'];
$pay=$_POST['pay'];
$useremail=$_SESSION['login'];
$status=0;
$vhid=$_GET['vhid'];
$sql="INSERT INTO tblbooking(userEmail,VehicleId,Phone,Address,File,Paymethod,Status)
 VALUES(:useremail,:vhid,:mobileno,:address,:file,:pay,:status)";
$query = $dbh->prepare($sql);
$query->bindParam(':useremail',$useremail,PDO::PARAM_STR);
$query->bindParam(':vhid',$vhid,PDO::PARAM_STR);
$query->bindParam(':mobileno',$mobileno,PDO::PARAM_STR);
$query->bindParam(':address',$address,PDO::PARAM_STR);
$query->bindParam(':file',$file,PDO::PARAM_STR);
$query->bindParam(':pay',$pay,PDO::PARAM_STR);
$query->bindParam(':status',$status,PDO::PARAM_STR);
$query->execute();
$lastInsertId = $dbh->lastInsertId();
if($lastInsertId)
{
 echo "<script>alert('Payment successfull.');</script>";


}
else{
  echo "<script>alert('Something went wrong. Please try again');</script>";
}

}


?>


<script>
function checkAvailability() {
$("#loaderIcon").show();
jQuery.ajax({
url: "check_available.php",
data:'emailid='+$("#emailid").val(),
type: "POST",
success:function(data){
$("#user-availability-status").html(data);
$("#loaderIcon").hide();
},
error:function (){}
});
}
</script>
<script type="text/javascript">
function valid()
{
if(document.signup.password.value!= document.signup.confirmpassword.value)
{
alert("Password and Confirm Password Field do not match  !!");
document.signup.confirmpassword.focus();
return false;
}
return true;
}
</script>
<div class="modal fade" id="signup">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h3 class="modal-title">Payment Form</h3>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="signup_wrap">
            <div class="col-md-12 col-sm-6">
            <form  method="post" name="signup" onSubmit="return valid();">
                <div class="form-group">
                  <input type="text" class="form-control" name="fullname" placeholder="Full Name" required="required">
                </div>
                      <div class="form-group">
                  <input type="text" class="form-control" name="mobileno" placeholder="Mobile Number ex: 078..." maxlength="10" required="required">
                </div>
                <div class="form-group">
                  <input type="email" class="form-control" name="emailid" id="emailid" onBlur="checkAvailability()" placeholder="Email Address" required="required">
                   <span id="user-availability-status" style="font-size:12px;"></span> 
                </div>
                <div class="form-group">
                 <textarea name="address" id="" class="form-control" placeholder="Home Address" required="required"  rows="3"></textarea>
                </div>
                <div class="form-group">
                  <label for="id">ID/PASSPORT</label>
                  <input type="file" class="form-control" name="file" placeholder="ID/Passport" required="required">
                </div>
                <div class="form-group">
                 
                  <ul class=" list-unstyled">
                              <li>
                                <label class="custom-control custom-radio  m-b-20">
                                   <input name="pay" id="radioStacked1" checked value="cash" type="radio" class="custom-control-input"> <span class="custom-control-indicator"></span> <span class="custom-control-description">Cash
                                       <br> <img src="images/paypal.jpg" alt="" width="110"></span> </label>
                                            
                                <label class="custom-control custom-radio  m-b-10">
                                    <input name="pay"  type="radio" value="paypal" class="custom-control-input"> <span class="custom-control-indicator"></span> <span class="custom-control-description">Credit Card
                                      <br><img src="images/paypal.jpg" alt="" width="110"></span> </label>
                               </li>
                   </ul>
                      
                </div>
                <div class="form-group">
                  <input type="submit" value="Sign Up" name="signup" id="submit" class="btn btn-block">
                </div>
              </form>
            </div>
            
          </div>
        </div>
      </div>
      <!-- <div class="modal-footer text-center">
        <p>Already got an account? <a href="#loginform" data-toggle="modal" data-dismiss="modal">Login Here</a></p>
      </div> -->
    </div>
  </div>
</div>
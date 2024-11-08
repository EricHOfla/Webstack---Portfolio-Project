<?php
session_start();
include('config.php');

// Remove error reporting suppression for debugging
// error_reporting(0);

$vhid = $_GET['vhid'];

if (isset($_POST['paynow'])) {
    
      //   $email = $_POST["email"];
      //   $mobileno = $_POST['phone'];
      //   $address = $_POST['address'];
      //   $file = $_POST['file'];
        $pay = $_POST['pay'];
        $status=0;
        $paystatus=$_POST['paystatus'];
        $useremail = $_SESSION['login'];
        $userId=$_SESSION['id'];
        // Remove duplicate declaration of $vhid
        // $vhid = $_GET['vhid'];

      //   if (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
      //       echo "error : You did not enter a valid email.";
      //   } else {
            // $sql = "SELECT EmailId FROM tblusers WHERE EmailId=:email";
            // $query = $dbh->prepare($sql);
            // $query->bindParam(':email', $$useremail, PDO::PARAM_STR);
            // $query->execute();
            // $rowCount = $query->rowCount(); // Get the count of rows
            // if ($rowCount == 0) {
            //     echo "<script>alert('Use Email in Registration.');</script>";
            // } else {
                $sql = "INSERT INTO tblbooking(userId,userEmail,VehicleId,Paymethod,Status,paystatus)
                        VALUES(:userId,:useremail,:vhid,:pay,:status,:paystatus)";
                $insertQuery = $dbh->prepare($sql);
                $insertQuery->bindParam(':userId', $userId, PDO::PARAM_STR);
                $insertQuery->bindParam(':useremail', $useremail, PDO::PARAM_STR);
                $insertQuery->bindParam(':vhid', $vhid, PDO::PARAM_STR);
                
               //  $insertQuery->bindParam(':mobileno', $mobileno, PDO::PARAM_STR);
               //  $insertQuery->bindParam(':address', $address, PDO::PARAM_STR);
               //  $insertQuery->bindParam(':file', $file, PDO::PARAM_STR);
                $insertQuery->bindParam(':pay', $pay, PDO::PARAM_STR);
                $insertQuery->bindParam(':status', $status, PDO::PARAM_STR);
                $insertQuery->bindParam(':paystatus', $paystatus, PDO::PARAM_STR);
               // $insertQuery->execute();
                    if ( $insertQuery->execute()) {
                        echo "<script>alert('Payment successful.');</script>";
                    } else {
                        echo "<script>alert('Something went wrong while updating vehicle status. Please try again');</script>";
                    }
        
}
?>



<!DOCTYPE HTML>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width,initial-scale=1">
<meta name="keywords" content="">
<meta name="description" content="">
<title>MOTORCYCLE MANAGEMENT SYSTEM</title>
<!--Bootstrap -->
<link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css">
<link rel="stylesheet" href="assets/css/styles.css" type="text/css">
<link rel="stylesheet" href="assets/css/owl.carousel.css" type="text/css">
<link rel="stylesheet" href="assets/css/owl.transitions.css" type="text/css">
<link href="assets/css/slick.css" rel="stylesheet">
<link href="assets/css/bootstrap-slider.min.css" rel="stylesheet">
<link href="assets/css/font-awesome.min.css" rel="stylesheet">
		<link rel="stylesheet" id="switcher-css" type="text/css" href="assets/switcher/css/switcher.css" media="all" />
		<link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/red.css" title="red" media="all" data-default-color="true" />
		<link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/orange.css" title="orange" media="all" />
		<link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/blue.css" title="blue" media="all" />
		<link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/pink.css" title="pink" media="all" />
		<link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/green.css" title="green" media="all" />
		<link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/purple.css" title="purple" media="all" />
<link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/images/favicon-icon/apple-touch-icon-144-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/images/favicon-icon/apple-touch-icon-114-precomposed.html">
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/images/favicon-icon/apple-touch-icon-72-precomposed.png">
<link rel="apple-touch-icon-precomposed" href="assets/images/favicon-icon/apple-touch-icon-57-precomposed.png">
<link rel="shortcut icon" href="assets/images/favicon-icon/24x24.png">
<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">
</head>
<body>
    <!-- <link href="css/style.css" rel="stylesheet">  -->
</head>
<body>
     
         <!--header starts-->
         <header id="header" class="header-scroll top-header headrom">
            <!-- .navbar -->
       
         </header>
         <div class="page-wrapper">
            <div class="breadcrumb">
               <div class="container"><br>
                  <ul>
                     <span style="font-size: 28px; font-weight: 700; margin:0 40%">Payment Form </span>
                    
                  </ul>
                
               </div>
            </div>
            <section class="contact-page inner-page">
               <div class="container">
 
                  <div class="row">
                     <!-- REGISTER -->
                     <div class="col-md-8">
                        <div class="widget">
                           <div class="widget-body">
                              
							  <form action="" method="POST">
                                 <div class="row">
								  
                                    <div class="form-group col-sm-12">
                                       <!-- <label for="exampleInputEmail1">First Name</label> -->
                                       <!-- <input class="form-control" type="text" name="firstname" value="" id="example-text-input" placeholder="First Name">  -->
                                    </div>
                                    <div class="form-group col-sm-6">
                                       <!-- <label for="exampleInputEmail1">Last Name</label> -->
                                       <!-- <input class="form-control" type="text" name="lastname" id="example-text-input-2" placeholder="Last Name">  -->
                                    </div>
                                    <div class="form-group col-sm-6">
                                       <!-- <label for="exampleInputEmail1">User Name</label> -->
                                       <!-- <input class="form-control" type="text" name="username" id="example-text-input" placeholder="UserName">  -->
                                    </div>
                                    <div class="form-group col-sm-6">
                                       <!-- <label for="exampleInputEmail1">Email address</label> -->
                                       <!-- <input type="text" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email"> <small id="emailHelp" class="form-text text-muted">We"ll never share your email with anyone else.</small>  -->
                                    </div>
                                    <div class="form-group col-sm-6">
                                       <!-- <label for="exampleInputEmail1">Phone number</label> -->
                                       <!-- <input class="form-control" type="text" name="phone" id="example-tel-input-3" placeholder="Phone"> <small class="form-text text-muted">We"ll never share your contact info with anyone else.</small>  -->
                                    </div>
                                    <div class="form-group col-sm-6">
                                       <!-- <label for="exampleInputEmail1">Phone number</label> -->
                                       <!-- <input class="form-control" type="text" name="phone" id="example-tel-input-3" placeholder="Phone">  -->
                                    </div>
                                   
                                    <div class="form-group col-sm-6">
                                       <!-- <label for="exampleInputPassword1">ID/PASSPORT</label> -->
                                       <!-- <input type="file" class="form-control" name="file" id="exampleInputPassword2" placeholder="Password">  -->
                                    </div>
                    

                                                
                                    <div class="form-group col-sm-12">
                                       <!-- <label for="exampleTextarea">Home Address</label> -->
                                       <!-- <textarea  id="exampleTextarea" placeholder="Home Address"  name="address" rows="3"></textarea> -->
                                       <select name="paystatus" id="" class="form-control">
                                       <option value="">Select Your Payment Mode</option>
                                       <option value=1>Full Payment</option>
                                       <option value=0>Partion Payment 75</option>
                                       
                                    </select>
                                    </div>
                                   
                                 </div>
                                 <div class="form-group col-sm-6">
                                       <label for="exampleInputPassword1">Method</label>
                 
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
                                 <div class="form-group checkbox col=sm-6">
                                 <input type="checkbox" id="terms_agree" required="required">
                                 <label for="terms_agree">I Agree with <a href="#">Terms and Conditions</a></label>
                                 <br><center>
                                 <small class="form-text text-muted">
                                          check this dawnloadable agreement</small> </center>
                                 </div>
                        
                                
                                 <div class="row">
                                    <div class="col-sm-4">
                                       <p> <input type="submit" onclick="return confirm('Are you sure?');" value="Pay Now" name="paynow" class="btn theme-btn"> </p>
                                    </div>
                                 </div>
                              </form>
                           
						   </div>
                           <!-- end: Widget -->
                        </div>
                        <!-- /REGISTER -->
                     </div>
                     <!-- WHY? -->
                     <div class="col-md-4">
                        <h4>Payment is fast and easy </h4>
                        <p>Get payment to avail all these benefits:</p>
						<ul>
						<li>Choose from Wide varities of bikes</li>
						<li>Free first week mentainance</li>
						<li>Special discounts & coupons</li>
						</ul>
                        <hr>
                        <img src="" alt="" class="img-fluid">
                        <p>Frequently Asked?</p>
                        <div class="panel">
                           <div class="panel-heading">
                              <h4 class="panel-title"><a data-parent="#accordion" data-toggle="collapse" class="panel-toggle collapsed" href="#faq1" aria-expanded="false"><i class="ti-info-alt" aria-hidden="true"></i>What is MCMS Customer Care Number?</a></h4>
                           </div>
                           <div class="panel-collapse collapse" id="faq1" aria-expanded="false" role="article" style="height: 0px;">
                              <div class="panel-body">We value our customer’s time and hence moved away from a single customer care number to a comprehensive chat-based support system for quick and easy resolution. You no longer have to go through the maze of an IVRS call support. Just search for your issue in the help section on this page and initiate a chat with us. A customer care executive will be assigned to you shortly. You can also email us your issue on support@hoadjin.rw</div>
                           </div>
                        </div>
                        <!-- end:panel -->
						
						
                        <!-- end:Panel -->
                        <h4 class="m-t-20">Contact Customer Support</h4>
                        <p> If you're looking for more help or have a question to ask, please feel free :)</p>
                        <p> <a href="#" class="btn theme-btn m-t-15">Contact Us</a> </p>
                     </div>
                     <!-- /WHY? -->
                  </div>
               </div>
            </section>
                   
                    
         </div>
         <!-- end:page wrapper -->
    
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/interface.js"></script>
<!--Switcher-->
<script src="assets/switcher/js/switcher.js"></script>
<!--bootstrap-slider-JS-->
<script src="assets/js/bootstrap-slider.min.js"></script>
<!--Slider-JS-->
<script src="assets/js/slick.min.js"></script>
<script src="assets/js/owl.carousel.min.js"></script>

</body>

<!-- Mirrored from themes.webmasterdriver.net/carforyou/demo/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 16 Jun 2017 07:22:11 GMT -->
</html>

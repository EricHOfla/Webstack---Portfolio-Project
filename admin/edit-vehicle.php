<?php
session_start();
error_reporting(0);
include('includes/config.php');
if(strlen($_SESSION['alogin'])==0)
	{
header('location:index.php');
}
else{

if(isset($_POST['submit']))
  {
$vehicletitle=$_POST['vehicletitle'];
$brand=$_POST['brandname'];
$vehicleoverview=$_POST['vehicalorcview'];
$priceperday=$_POST['priceperday'];
$fueltype=$_POST['fueltype'];
$modelyear=$_POST['modelyear'];
$seatingcapacity=$_POST['seatingcapacity'];
// $vimage1=$_FILES["img1"]["name"];
// $vimage2=$_FILES["img2"]["name"];
// $vimage3=$_FILES["img3"]["name"];
// $vimage4=$_FILES["img4"]["name"];
// $vimage5=$_FILES["img5"]["name"];

$displ=$_POST['displ'];
$maxpower=$_POST['maxpower'];
$maxtorque=$_POST['maxtorque'];
$dimens=$_POST['dimens'];
$wheelbase=$_POST['wheelbase'];
$netweight=$_POST['netweight'];
$minground=$_POST['minground'];
$ftyre=$_POST['ftyre'];
$rtyre=$_POST['rtyre'];
$fuel=$_POST['fuel'];
$sitting=$_POST['sitting'];


$airconditioner=$_POST['airconditioner'];
$powerdoorlocks=$_POST['powerdoorlocks'];
$antilockbrakingsys=$_POST['antilockbrakingsys'];
$brakeassist=$_POST['brakeassist'];
$powersteering=$_POST['powersteering'];
$driverairbag=$_POST['driverairbag'];
$passengerairbag=$_POST['passengerairbag'];
$powerwindow=$_POST['powerwindow'];
$cdplayer=$_POST['cdplayer'];
$centrallocking=$_POST['centrallocking'];
$crashcensor=$_POST['crashcensor'];
$leatherseats=$_POST['leatherseats'];
$id=intval($_GET['id']);
// move_uploaded_file($_FILES["img1"]["tmp_name"],"img/vehicleimages/".$_FILES["img1"]["name"]);
// move_uploaded_file($_FILES["img2"]["tmp_name"],"img/vehicleimages/".$_FILES["img2"]["name"]);
// move_uploaded_file($_FILES["img3"]["tmp_name"],"img/vehicleimages/".$_FILES["img3"]["name"]);
// move_uploaded_file($_FILES["img4"]["tmp_name"],"img/vehicleimages/".$_FILES["img4"]["name"]);
// move_uploaded_file($_FILES["img5"]["tmp_name"],"img/vehicleimages/".$_FILES["img5"]["name"]);

$sql="UPDATE tblvehicles SET VehiclesTitle=:vehicletitle,VehiclesBrand=:brand,VehiclesOverview=:vehicleoverview,PricePerDay=:priceperday,FuelType=:fueltype,ModelYear=:modelyear,
SeatingCapacity=:seatingcapacity,Displacement=:displacement,Maxpower=:maxpower,Maxtorque=:maxtorque,Dimension=:dimension,Wheelbase=:wheelbase,Netweight=:netweight,Mingroundclearence=:mingroundclearence,Fronttyre=:fronttyre,Reartyre=:reartyre,Fueltankcapacity=:fueltankcapacity,Sittingheight=:sittingheight,AirConditioner=:airconditioner,PowerDoorLocks=:powerdoorlocks,AntiLockBrakingSystem=:antilockbrakingsys,BrakeAssist=:brakeassist,PowerSteering=:powersteering,DriverAirbag=:driverairbag,PassengerAirbag=:passengerairbag,PowerWindows=:powerwindow,CDPlayer=:cdplayer,CentralLocking=:centrallocking,CrashSensor=:crashcensor,LeatherSeats=:leatherseats where id=:id";
$query = $dbh->prepare($sql);
$query->bindParam(':vehicletitle',$vehicletitle,PDO::PARAM_STR);
$query->bindParam(':brand',$brand,PDO::PARAM_STR);
$query->bindParam(':vehicleoverview',$vehicleoverview,PDO::PARAM_STR);
$query->bindParam(':priceperday',$priceperday,PDO::PARAM_STR);
$query->bindParam(':fueltype',$fueltype,PDO::PARAM_STR);
$query->bindParam(':modelyear',$modelyear,PDO::PARAM_STR);
$query->bindParam(':seatingcapacity',$seatingcapacity,PDO::PARAM_STR);

// $query->bindParam(':vimage1',$vimage1,PDO::PARAM_STR);
// $query->bindParam(':vimage2',$vimage2,PDO::PARAM_STR);
// $query->bindParam(':vimage3',$vimage3,PDO::PARAM_STR);
// $query->bindParam(':vimage4',$vimage4,PDO::PARAM_STR);
// $query->bindParam(':vimage5',$vimage5,PDO::PARAM_STR);

$query->bindParam(':displacement',$displ,PDO::PARAM_STR);
$query->bindParam(':maxpower',$maxpower,PDO::PARAM_STR);
$query->bindParam(':maxtorque',$maxtorque,PDO::PARAM_STR);
$query->bindParam(':dimension',$dimens,PDO::PARAM_STR);
$query->bindParam(':wheelbase',$wheelbase,PDO::PARAM_STR);
$query->bindParam(':netweight',$netweight,PDO::PARAM_STR);
$query->bindParam(':mingroundclearence',$minground,PDO::PARAM_STR);
$query->bindParam(':fronttyre',$ftyre,PDO::PARAM_STR);
$query->bindParam(':reartyre',$rtyre,PDO::PARAM_STR);
$query->bindParam(':fueltankcapacity',$fuel,PDO::PARAM_STR);
$query->bindParam(':sittingheight',$sitting,PDO::PARAM_STR);

$query->bindParam(':airconditioner',$airconditioner,PDO::PARAM_STR);
$query->bindParam(':powerdoorlocks',$powerdoorlocks,PDO::PARAM_STR);
$query->bindParam(':antilockbrakingsys',$antilockbrakingsys,PDO::PARAM_STR);
$query->bindParam(':brakeassist',$brakeassist,PDO::PARAM_STR);
$query->bindParam(':powersteering',$powersteering,PDO::PARAM_STR);
$query->bindParam(':driverairbag',$driverairbag,PDO::PARAM_STR);
$query->bindParam(':passengerairbag',$passengerairbag,PDO::PARAM_STR);
$query->bindParam(':powerwindow',$powerwindow,PDO::PARAM_STR);
$query->bindParam(':cdplayer',$cdplayer,PDO::PARAM_STR);
$query->bindParam(':centrallocking',$centrallocking,PDO::PARAM_STR);
$query->bindParam(':crashcensor',$crashcensor,PDO::PARAM_STR);
$query->bindParam(':leatherseats',$leatherseats,PDO::PARAM_STR);
$query->bindParam(':id',$id,PDO::PARAM_STR);
$query->execute();

$msg="Data updated successfully";


}


	?>
<!doctype html>
<html lang="en" class="no-js">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<meta name="theme-color" content="#3e454c">

	<title>Bike Seller | Admin Post Vehicle</title>

		<!-- Font awesome -->
        <link rel="stylesheet" href="css/font-awesome.min.css">
	<!-- Sandstone Bootstrap CSS -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<!-- Bootstrap Datatables -->
	<link rel="stylesheet" href="css/dataTables.bootstrap.min.css">
	<!-- Bootstrap social button library -->
	<link rel="stylesheet" href="css/bootstrap-social.css">
	<!-- Bootstrap select -->
	<link rel="stylesheet" href="css/bootstrap-select.css">
	<!-- Bootstrap file input -->
	<link rel="stylesheet" href="css/fileinput.min.css">
	<!-- Awesome Bootstrap checkbox -->
	<link rel="stylesheet" href="css/awesome-bootstrap-checkbox.css">
	<!-- Admin Stye -->
	<link rel="stylesheet" href="css/style.css">
<style>
		.errorWrap {
    padding: 10px;
    margin: 0 0 20px 0;
    background: #fff;
    border-left: 4px solid #dd3d36;
    -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
    box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
}
.succWrap{
    padding: 10px;
    margin: 0 0 20px 0;
    background: #fff;
    border-left: 4px solid #5cb85c;
    -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
    box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
}

table {
	margin:0 30px;
	width:100%;
}
table th,table td {
  border: 1px solid #cccccc;
  padding: 9px;
  
}
table input {
  border: none;
  padding: 10px;
  width: 100%;
  outline: none;
  
}
table th img, table td img {
	max-width:100%;
}
table thead {
	background:#eee;
}
table thead th, table thead td {
	text-transform:uppercase;
	font-weight:900;
	color:#111;
}

		</style>

</head>


<body>
	<?php include('includes/header.php');?>
	<div class="ts-main-content">
	<?php include('includes/leftbar.php');?>
		<div class="content-wrapper">
			<div class="container-fluid">

				<div class="row">
					<div class="col-md-12">

						<h2 class="page-title">Edit Vehicle</h2>

						<div class="row">
							<div class="col-md-12">
								<div class="panel panel-default">
									<div class="panel-heading">Basic Info</div>
									<div class="panel-body">
<?php if($msg){?><div class="succWrap"><strong>SUCCESS</strong>:<?php echo htmlentities($msg); ?> </div><?php } ?>
<?php
$id=intval($_GET['id']);
$sql ="SELECT tblvehicles.*,tblbrands.BrandName,tblbrands.id as bid from tblvehicles join tblbrands on tblbrands.id=tblvehicles.VehiclesBrand where tblvehicles.id=:id";
$query = $dbh -> prepare($sql);
$query-> bindParam(':id', $id, PDO::PARAM_STR);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $result)
{	?>

<form method="post" class="form-horizontal" enctype="multipart/form-data">
<div class="form-group">
<label class="col-sm-2 control-label">Vehicle Title<span style="color:red">*</span></label>
<div class="col-sm-4">
<input type="text" name="vehicletitle" class="form-control" value="<?php echo htmlentities($result->VehiclesTitle)?>" required>
</div>
<label class="col-sm-2 control-label">Select Brand<span style="color:red">*</span></label>
<div class="col-sm-4">
<select class="selectpicker" name="brandname" required>
<option value="<?php echo htmlentities($result->bid);?>"><?php echo htmlentities($bdname=$result->BrandName); ?> </option>
<?php $ret="select id,BrandName from tblbrands";
$query= $dbh -> prepare($ret);
//$query->bindParam(':id',$id, PDO::PARAM_STR);
$query-> execute();
$resultss = $query -> fetchAll(PDO::FETCH_OBJ);
if($query -> rowCount() > 0)
{
foreach($resultss as $results)
{
if($results->BrandName==$bdname)
{
continue;
} else{
?>
<option value="<?php echo htmlentities($results->id);?>"><?php echo htmlentities($results->BrandName);?></option>
<?php }}} ?>

</select>
</div>
</div>

<div class="hr-dashed"></div>
<div class="form-group">
<label class="col-sm-2 control-label">Vehical Overview<span style="color:red">*</span></label>
<div class="col-sm-10">
<textarea class="form-control" name="vehicalorcview" rows="3" required><?php echo htmlentities($result->VehiclesOverview);?></textarea>
</div>
</div>

<div class="form-group">
<label class="col-sm-2 control-label">Price Per Day(in USD)<span style="color:red">*</span></label>
<div class="col-sm-4">
<input type="text" name="priceperday" class="form-control" value="<?php echo htmlentities($result->PricePerDay);?>" required>
</div>
<label class="col-sm-2 control-label">Select Fuel Type<span style="color:red">*</span></label>
<div class="col-sm-4">
<select class="selectpicker" name="fueltype" required>
<option value="<?php echo htmlentities($results->FuelType);?>"> <?php echo htmlentities($result->FuelType);?> </option>

<option value="Petrol">Petrol</option>
<option value="Diesel">Diesel</option>
<option value="CNG">CNG</option>
</select>
</div>
</div>


<div class="form-group">
<label class="col-sm-2 control-label">Model Year<span style="color:red">*</span></label>
<div class="col-sm-4">
<input type="text" name="modelyear" class="form-control" value="<?php echo htmlentities($result->ModelYear);?>" required>
</div>
<label class="col-sm-2 control-label">Seating Capacity<span style="color:red">*</span></label>
<div class="col-sm-4">
<input type="text" name="seatingcapacity" class="form-control" value="<?php echo htmlentities($result->SeatingCapacity);?>" required>
</div>
</div>
<div class="hr-dashed"></div>
<div class="form-group">
<div class="col-sm-12">
<h4><b>Vehicle Images</b></h4>
</div>
</div>


<div class="form-group">
<div class="col-sm-4">
Image 1 <img src="img/vehicleimages/<?php echo htmlentities($result->Vimage1);?>" width="300" height="200" style="border:solid 1px #000">
<a href="changeimage1.php?imgid=<?php echo htmlentities($result->id)?>">Change Image 1</a>
</div>
<div class="col-sm-4">
Image 2<img src="img/vehicleimages/<?php echo htmlentities($result->Vimage2);?>" width="300" height="200" style="border:solid 1px #000">
<a href="changeimage2.php?imgid=<?php echo htmlentities($result->id)?>">Change Image 2</a>
</div>
<div class="col-sm-4">
Image 3<img src="img/vehicleimages/<?php echo htmlentities($result->Vimage3);?>" width="300" height="200" style="border:solid 1px #000">
<a href="changeimage3.php?imgid=<?php echo htmlentities($result->id)?>">Change Image 3</a>
</div>
</div>


<div class="form-group">
<div class="col-sm-4">
Image 4<img src="img/vehicleimages/<?php echo htmlentities($result->Vimage4);?>" width="300" height="200" style="border:solid 1px #000">
<a href="changeimage4.php?imgid=<?php echo htmlentities($result->id)?>">Change Image 4</a>
</div>
<div class="col-sm-4">
Image 5
<?php if($result->Vimage5=="")
{
echo htmlentities("File not available");
} else {?>
<img src="img/vehicleimages/<?php echo htmlentities($result->Vimage5);?>" width="300" height="200" style="border:solid 1px #000">
<a href="changeimage5.php?imgid=<?php echo htmlentities($result->id)?>">Change Image 5</a>
<?php } ?>
</div>

</div>
<div class="hr-dashed"></div>
</div>
</div>
</div>
</div>






<div class="row">
<div class="col-md-6">

<?php
$sql ="SELECT * from tblvehicles  where tblvehicles.id=:id";
$query = $dbh -> prepare($sql);
$query-> bindParam(':id', $id, PDO::PARAM_STR);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $result)
{	?>


<table>
	
                  <thead>
                    <tr>
                      <th colspan="2">Technical Parameter</th>
                    </tr>
                  </thead>
                  <tbody>


<tr>
<td>Displacement(cc)</td>

<td><p> <input type="text" name="displ" value="<?php echo htmlentities($result->Displacement)?>" required> </p></td>
   </tr>

<tr>
<td>Max power (kw/rpm)</td>
<td><p> <input type="text" name="maxpower" value="<?php echo htmlentities($result->Maxpower)?>" required> </p></td>
</tr>


<tr>
<td>Max torque</td>
<td><p> <input type="text" name="maxtorque" value="<?php echo htmlentities($result->Maxtorque)?>" required> </p></td>
</tr>

<tr>
<td>Dimension(mm)</td>
<td><p> <input type="text" name="dimens" value="<?php echo htmlentities($result->Dimension)?>" required> </p></td>
</tr>
<tr>

<td>Wheelbase (mm)</td>
<td><p> <input type="text" name="wheelbase" value="<?php echo htmlentities($result->Wheelbase)?>" required> </p></td>
</tr>

<tr>
<td>Net weight (kg)</td>
<td><p> <input type="text" name="netweight" value="<?php echo htmlentities($result->Netweight)?>" required> </p></td>
</tr>

<tr>
<td>Min ground clearence</td>
<td><p> <input type="text" name="minground" value="<?php echo htmlentities($result->Mingroundclearence)?>" required> </p></td>
</tr>

<tr>
<td>Front tyre</td>
<td><p> <input type="text" name="ftyre" value="<?php echo htmlentities($result->Fronttyre)?>" required> </p></td>
</tr>

<tr>
<td>Rear tyre</td>
<td><p> <input type="text" name="rtyre" value="<?php echo htmlentities($result->Reartyre)?>" required> </p></td>
</tr>

<tr>
<td>Fuel tank capacity (L)</td>
<td><p> <input type="text" name="fuel" value="<?php echo htmlentities($result->Fueltankcapacity)?>" required> </p></td>
</tr>

<tr>
<td>Sitting height (mm)</td>
<td><p> <input type="text" name="sitting" value="<?php echo htmlentities($result->Sittingheight)?>" required> </p></td>
</tr>

                  </tbody>
				
                </table>
                <?php }} ?>

</div>





<div class="col-md-6">
<div class="panel panel-default">
<div class="panel-heading">Accessories</div>
<div class="panel-body">

<div class="col-sm-3">

<?php if($result->AntiLockBrakingSystem==1)
{?>
<div class="checkbox checkbox-inline">
<input type="checkbox" id="inlineCheckbox1" name="antilockbrakingsys" checked value="1">
<label for="inlineCheckbox3"> AntiLock Braking System </label>

<?php } else {?>
<div class="checkbox checkbox-inline">
<input type="checkbox" id="inlineCheckbox1" name="antilockbrakingsys" value="1">
<label for="inlineCheckbox3"> AntiLock Braking System </label>

<?php } ?>
<br><br>
<?php if($result->BrakeAssist==1)
{
	?>

<input type="checkbox" id="inlineCheckbox1" name="brakeassist" checked value="1">
<label for="inlineCheckbox3"> Brake Assist </label>

<?php } else {?>

<input type="checkbox" id="inlineCheckbox1" name="brakeassist" value="1">
<label  for="inlineCheckbox3"> Brake Assist </label>

<?php } ?>

<br><br>
<?php if($result->PowerSteering==1)
{
?>

<input type="checkbox" id="inlineCheckbox1" name="powersteering" checked value="1">
<label for="inlineCheckbox3"> Smooth Handling </label>

</div>
<?php } else { ?>

	<input type="checkbox" id="inlineCheckbox1" name="powersteering" value="1">
<label  for="inlineCheckbox3"> Smooth Handling </label>
</div>
<?php } ?>
<br><br>
</div>
<div class="col-sm-3">
<?php if($result->CrashSensor==1)
{
?>
<div class="checkbox checkbox-inline">
<input type="checkbox" id="inlineCheckbox1" name="crashcensor" checked value="1">
<label for="inlineCheckbox3" > Crash Sensor </label>

<?php } else {?>
<div class="checkbox checkbox-inline">
<input type="checkbox" id="inlineCheckbox1" name="crashcensor" value="1">
<label for="inlineCheckbox3"> Crash Sensor </label>

<?php } ?>
<br><br>
<?php if($result->CentralLocking==1)
{
?>

<input type="checkbox" id="inlineCheckbox1" name="centrallocking" checked value="1">
<label for="inlineCheckbox3"> Central Locking </label>

<?php } else {?>
<div class="checkbox checkbox-inline">
<input type="checkbox" id="inlineCheckbox1" name="centrallocking" value="1">
<label for="inlineCheckbox3"> Central Locking </label>

<?php } ?>
<br><br>
<?php if($result->LeatherSeats==1)
{
?>

<input type="checkbox" id="inlineCheckbox1" name="leatherseats" checked value="1">
<label for="inlineCheckbox3"> Leather Seats </label>

<?php } else { ?>

<input type="checkbox" id="inlineCheckbox1" name="leatherseats" value="1">
<label for="inlineCheckbox3"> Leather Seats </label>
</div>
<?php } ?>
</div>
</div>
</div>

</div>
</div>
						</div>
						
                        <?php }} ?>
											<div class="form-group" style="margin: 30px 47rem">
												<div class="col-sm-8 col-sm-offset-2">
													<button class="btn btn-default" type="reset">Cancel</button>
													<button class="btn btn-primary" name="submit" type="submit">Save changes</button>
												</div>
											</div>

										</form>
									</div>
								</div>
							</div>
						</div>



					</div>
				</div>

				<br><br>

			</div>
		</div>
	</div>

	<!-- Loading Scripts -->
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap-select.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.dataTables.min.js"></script>
	<script src="js/dataTables.bootstrap.min.js"></script>
	<script src="js/Chart.min.js"></script>
	<script src="js/fileinput.js"></script>
	<script src="js/chartData.js"></script>
	<script src="js/main.js"></script>
</body>
</html>
<?php } ?>

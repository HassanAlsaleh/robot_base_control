<?php
require_once("connect.php");

$entry="1";
if (isset($_GET['Start'])){

$state="1"; //0 is off and 1 is on 
$sqlq="UPDATE movement SET 
state='$state'
WHERE entry='$entry'";
if (@mysqli_query($connection, $sqlq)) {
    echo  "<script> window.alert('The base movement has started');
     </script>";
     // location.href='';
} else {
    die("Updating has failed:" . mysqli_error($connection));
}
}
if (isset($_GET['Forward'])){
$direction="f";
$sqlq="UPDATE movement SET 
direction='$direction'
WHERE entry='$entry'";
if (@mysqli_query($connection, $sqlq)) {
    echo  "<script> window.alert('The base movement has been set to Forward');
    </script>";
} else {
    die("Updating has failed:" . mysqli_error($connection));
}
}


if (isset($_GET['Right'])){
$direction="r";
$sqlq="UPDATE movement SET 
direction='$direction'
WHERE entry='$entry'";
if (@mysqli_query($connection, $sqlq)) {
    echo  "<script> window.alert('The base movement has been set to Right');
    </script>";
} else {
    die("Updating has failed:" . mysqli_error($connection));
}
}
if (isset($_GET['Left'])){
$direction="l";
$sqlq="UPDATE movement SET 
direction='$direction'
WHERE entry='$entry'";
if (@mysqli_query($connection, $sqlq)) {
    echo  "<script> window.alert('The base movement has been set to Left');
      </script>";
} else {
    die("Updating has failed:" . mysqli_error($connection));
}
}
if (isset($_GET['Back'])){
$direction="b";
$sqlq="UPDATE movement SET 
direction='$direction'
WHERE entry='$entry'";
if (@mysqli_query($connection, $sqlq)) {
    echo  "<script> window.alert('The base movement has been set to Backward');
 </script>";
} else {
    die("Updating has failed:" . mysqli_error($connection));
}
} 
 $q1 = "SELECT * FROM movement where entry='1'";
$res = mysqli_query($connection, $q1);
    $direction="";
    $state=0;
    $entry=1;
if (mysqli_num_rows($res) > 0) {
	$row = mysqli_fetch_assoc($res);
	$state=$row["state"];
	$direction=$row["direction"];

	 echo  "$direction, $state";


	}


?>


<!DOCTYPE html>
<html>
<head>
	<title>Base control</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	  <meta charset="UTF-8">
      <meta name = "keywords" content = "Robotic, Robot, arm, robotic base, control" />
      <meta name = "description" content = "A page to control the base engines a robot made by Smart Methods" />
      <link rel="stylesheet" type="text/css" href="index.css">
      <script type="text/javascript" src="index.js"></script>
</head>
<body>

   <div class="container-fluid">
	<div class="row">
		<div class="col-md-12"> 
			<h2 class="text-center text-muted">
				Robot base control
			</h2>
			<div class="row">
				<div class="col-md-12">
					 
							<form action="index.php" method="get">
	<input type="submit" value="Forward" name="Forward"  class="btn btn-primary btn-block" role="button">
	</form>
				</div>
			</div>
			<div class="row">
				<div class="col-md-5">
					 
								<form action="index.php" method="get">
	<input type="submit" value="Left" name="Left"  class="btn btn-primary btn-block" role="button">
	</form>
				</div>
				<div class="col-md-2">
					 
					<form action="index.php" method="get">
	<input type="submit" id="btn" value="Start" name="Start" onclick="ssbutton()" class="btn btn-success btn-block" role="button">
	</form>
				</div>
				<div class="col-md-5">
					 
					<form action="index.php" method="get">
	<input type="submit" value="Right" name="Right"  class="btn btn-primary btn-block" role="button">
	</form>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					 
					<form action="index.php" method="get">
	<input type="submit" value="Backward" name="Back"  class="btn btn-primary btn-block" role="button">
	</form>
				</div>
			</div>
		</div>
	</div>
</div>

<script type="text/javascript">
function ssbutton(){
	document.getElementById("btn") =function(){


    if(this.value === "Start"){
        this.value = "Stop";
    }else{
        this.value= "Start";
	}


 }

    
    </script>
</body>
</html>